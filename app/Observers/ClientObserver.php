<?php

namespace App\Observers;

use App\Mail\ClientCredential;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ClientObserver
{
    /**
     * Handle the Client "created" event.
     */
    public function created(Client $client): void
    {
        //
    }

    /**
     * Handle the Client "updated" event.
     */
    public function updated(Client $client): void
    {
        if ($client->isDirty('status') && $client->status === 'approved') {

            $password = str_pad((string) random_int(0, 9999), 4, '0', STR_PAD_LEFT);

            $client->password = Hash::make($password);
            $client->saveQuietly();

            Mail::to($client->email)->send(new ClientCredential($client, $password));
        }

    }

    /**
     * Handle the Client "deleted" event.
     */
    public function deleted(Client $client): void
    {
        //
    }

    /**
     * Handle the Client "restored" event.
     */
    public function restored(Client $client): void
    {
        //
    }

    /**
     * Handle the Client "force deleted" event.
     */
    public function forceDeleted(Client $client): void
    {
        //
    }
}
