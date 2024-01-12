<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscribers;
use App\Mail\Newsletter;


class NewsController extends Controller
{

    /**
     * Envoyer la newsletter à tous les abonnés.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendernewsletter()
    {
        // Récupérez tous les e-mails des abonnés
        $subscribers = Subscribers::pluck('email')->toArray();

        // Vérifiez si l'e-mail de l'utilisateur est dans la liste des abonnés
        if ($subscribers){
            // Pour envoyer à tous les abonnés, décommentez ou laissez la logique suivante:
            foreach ($subscribers as $email) {
                Mail::to($email)
                    ->send(new Newsletter());
            }
            return response()->json(['message' => 'Newsletter sent successfully']);
        } else {
            // Si l'e-mail de l'utilisateur n'est pas un abonné, vous pouvez choisir de ne pas envoyer d'e-mail ou de gérer cette situation différemment.
            return response()->json(['message' => 'User is not subscribed to the newsletter.']);
        }
    }
}
