@extends('layout.app')
@section('title','Visi & Misi')

@section('content')
    <div class="container py-4 px-4 border border-info shadow-lg p-3 mb-5 bg-white rounded">
        <h1 class="display-6 text-center">Visi</h1>
            <p class="display-6 text-center">
                Membantu siswa-siswi meningkatkan pengetahuan dan keterampilan dan menjadi lebih unggul dalam meraih peluang usaha.
            </p>
        <h1 class="display-6 text-center">Misi</h1>
            <ol type="1.">
                <li>Menyediakan materi yang bisa yang bisa di pahami dengan mudah dan bisa diaplikasikan sesuai dengan keperluannya.</li>
                <li> Menyediakan tenaga pendidik atau tutor yang berpengalaman agar menghasilkan lulusan yang kompetesn.</li>
                <li>Melaksanakan pembelajaran yang aktif, kreativ, inovatif dan menyenangkan.</li>
            </ol>
     </div>
@endsection

@section('sidebar')
    <div class="card shadow-lg">
        <div class="card-header">Map LCRM</div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.52165176235!2d104.19424891476021!3d-4.117208697006358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwMDcnMDIuMCJTIDEwNMKwMTEnNDcuMiJF!5e0!3m2!1sen!2sid!4v1556681705136!5m2!1sen!2sid" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </div>
@endsection
