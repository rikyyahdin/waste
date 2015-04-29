<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\EntriTpsampah;
use App\EntriTpakhir;
use App\Tpsampah;
use App\Tpakhir;

class EntriController extends Controller
{

    /**
     * Halaman tambah Entri TPS.
     *
     * @return \Illuminate\View\View
     */
    public function create_tps()
    {
        $tpsampahs = Tpsampah::all();

        return view('entri.create_tps', compact('tpsampahs'));
    }

    /**
     * Menambah entri TPS.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store_tps(Request $request)
    {
        EntriTpsampah::create($request->input());

        return redirect()->route('entry.create_tps');
    }

    /**
     * Halaman tambah entri TPA.
     *
     * @return \Illuminate\View\View
     */
    public function create_tpa() {
        $tpsampahs = Tpsampah::all();
        $tpakhirs = Tpakhir::all();

        return view('entri.create_tpa', compact('tpsampahs', 'tpakhirs'));
    }

    /**
     * Menambah entri TPA.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store_tpa(Request $request) {
        EntriTpakhir::create($request->input());

        return redirect()->route('entry.create_tpa');
    }
}
