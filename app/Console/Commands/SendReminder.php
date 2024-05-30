<?php

namespace App\Console\Commands;

use App\Models\Cita;
use Illuminate\Console\Command;
use Twilio\Rest\Client;

class SendReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $citas = Cita::with(['paciente', 'medico'])->whereRaw('CAST(fecha_hora_cita AS DATE) = ?', [now()->addDay()->format('Y-m-d')])->get();

        $twilioService = new Client(env('TWILIO_SID'), env('TWILIO_TOKEN'));

        foreach ($citas as $cita) {
            $message = "Hola {{1}}, recuerda que tienes una cita con el Dr./Dra. {{2}}.  El día {{3}} a las {{4}}. Por favor confirma tu asistencia.";
            $message = str_replace('{{1}}', $cita->paciente->nombre, $message);
            $message = str_replace('{{2}}', $cita->medico->nombre, $message);
            $message = str_replace('{{3}}', $cita->fecha_hora_cita->format('d-m-Y'), $message);
            $message = str_replace('{{4}}', $cita->fecha_hora_cita->format('H:i'), $message);

            $twilioService->messages->create(
                'whatsapp:' . $cita->paciente->telefono,
                [
                    'from' => 'whatsapp:' . env('TWILIO_WHATSAPP_NUMBER'),
                    'body' => $message,
                ]
            );
        }
    }
}
