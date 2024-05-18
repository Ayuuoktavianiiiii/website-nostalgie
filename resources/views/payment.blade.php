@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pembayaran</h1>
    <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="order_id" value="{{ $order->id }}">
        <div class="mb-3">
            <label for="payment_method" class="form-label">Metode Pembayaran</label>
            <select class="form-select" id="payment_method" name="payment_method">
                <option value="bank_transfer">Transfer Bank</option>
                <option value="credit_card">Kartu Kredit</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="proof_of_payment" class="form-label">Bukti Pembayaran</label>
            <input type="file" class="form-control" id="proof_of_payment" name="proof_of_payment" required>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Bukti Pembayaran</button>
    </form>
</div>
@endsection