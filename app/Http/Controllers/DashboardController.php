<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use DeliciousBrains\SpinupWp\SpinupWp;

class DashboardController extends Controller
{
    /**
     * Use Laravel dependency injection, so you can easily access to the singleton instance of SpinupWP;
     */
    protected SpinupWp $spinupwp;

    public function __construct(SpinupWp $spinupwp)
    {
        $this->spinupwp = $spinupwp;
    }

    /**
     * The index method will retrieve our servers list from SpinupWP.
     * The method `$this->spinupwp::servers()->list()` will return an instance of `ResourceCollection` which you can iterate.
     * In order to be able to pass it to Vue, you need it to be an array, so you use the `toArray()` method.
     * Finally, render our Inertia component/response and include our data:
     *
     * @return Response
     */
    public function index(): Response
    {
        $servers = $this->spinupwp->servers->list()->toArray();
        return Inertia::render('Dashboard', [
            'servers' => $servers,
        ]);
    }
}
