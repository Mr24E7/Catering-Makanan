<div class="card">
    <div class="card-body">
        <table class="table-borderless">
            <tr>
                <td>Pelanggan Yang Terhormat <strong>{{ $name }}</strong></td>
            </tr>
            <tr>
                <td>Id Order Anda: <strong>{{ $order_id }}</strong></td>
            </tr>
            <tr>
                <td>Total Belanja: <strong>{{ $total ?? '' }}tk</strong></td>
            </tr>
            <tr>
                <td>Nomor Handphone Anda: <strong>{{ $number ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>Alamt Pengantaran Anda: <strong>{{ $address ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>Terima Kasih Telah Memesan </td>
            </tr>
            <tr>
                <td>Stay Connected us</td>
            </tr>
            <tr><td>Visit this link to shop more:<a href="{{ url('/') }}">Click to more</a></td></tr>
            <tr>
                <td>Regards,</td>
            </tr>
            <tr>
                <td>Catering Team</td>
            </tr>
        </table>

    </div>
</div>

