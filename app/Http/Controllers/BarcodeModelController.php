<?php

namespace App\Http\Controllers;

use App\Models\BarcodeModel;
use Illuminate\Http\Request;

class BarcodeModelController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        $products = BarcodeModel::all();
        return view ( 'index', compact( 'products' ) );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        return view( 'create' );
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {

        $number = mt_rand( 1000000, 9999999 );

        if ( $this->productCodeExists( $number ) ) {

            $number = mt_rand( 1000000, 9999999 );

        }

        $request[ 'product_code' ] = $number;

        BarcodeModel::create( $request->all() );
        return redirect( '/' );
    }

    public function productCodeExists( $number ) {
        return BarcodeModel::whereProductCode( $number )->exists();
    }

    /**
    * Display the specified resource.
    */

    public function show( BarcodeModel $barcodeModel ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( BarcodeModel $barcodeModel ) {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, BarcodeModel $barcodeModel ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( BarcodeModel $barcodeModel ) {
        //
    }
}
