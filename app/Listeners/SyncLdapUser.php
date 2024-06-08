<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use LdapRecord\Laravel\Events\AuthenticatedWithLdap;
use App\Models\User;

class SyncLdapUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AuthenticatedWithLdap $event)
    {
        // Obtén el usuario de LDAP
        $ldapUser = $event->user;

        // Sincroniza los atributos del usuario de LDAP con la base de datos local
        $localUser = User::updateOrCreate(
            ['username' => $ldapUser->getFirstAttribute('samaccountname')], // o el atributo de LDAP que estés usando como nombre de usuario
            [
                'name' => $ldapUser->getFirstAttribute('cn'),
                // Puedes agregar más atributos que desees sincronizar
            ]
        );

        // Puedes hacer cualquier otra lógica que necesites aquí, como asignar roles, etc.
    }
}
