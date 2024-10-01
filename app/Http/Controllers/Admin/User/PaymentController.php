<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Payment;
use App\Models\Service;
use App\Models\User;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $payments = $user->payments;
        $services = $user->services()->withPivot('contract_number')->get();
        return view('admin.users.payments.index', compact('user', 'payments', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Service $service)
    {
        return view('admin.users.payments.create', compact('user', 'service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request, User $user)
    {
        $data = $request->validated();
        $payment = Payment::create($data);
        return redirect()->route('admin.users.payments', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Payment $payment)
    {
        if ($payment->user_id != $user->id)
        {
            abort(404);
        }
        $services = $user->services;

        return view('admin.users.payments.edit', compact('payment', 'user', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\User $user
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, User $user, Payment $payment)
    {
        if ($payment->user_id != $user->id)
        {
            abort(404);
        }
        $data = $request->validated();
        $payment->update($data);
        return redirect()->route('admin.users.payments', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Payment $payment)
    {
        if ($payment->user_id != $user->id)
        {
            abort(404);
        }
        $payment->delete();
        return redirect()->route('admin.users.payments', $user);
    }
}
