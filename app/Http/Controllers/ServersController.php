<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use DeliciousBrains\SpinupWp\SpinupWp;

class ServersController extends Controller
{
    protected SpinupWp $spinupwp;

    public function __construct(SpinupWp $spinupwp)
    {
        $this->spinupwp = $spinupwp;
    }

    public function show(int $server): Response
    {
        $server = $this->spinupwp->servers->get($server);
        $sites = $server->sites()->toArray();

        return Inertia::render('Servers/Show', [
            'server' => $server->toArray(),
            'sites' => $sites,
        ]);
    }

}
