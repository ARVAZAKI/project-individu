@extends('layouts/main')
@section('title','project')
@section('content')

    <section id="projects">
            <div class="container">
                <div class="row">
                    <div class="col text-center mb-5">
                        <h2>My Projects</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://cf.shopee.co.id/file/73900d9dd869640b193bfe3f6e79ced1" class="card-img-top" alt="gambar">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="gambar">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="gambar">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,224L60,240C120,256,240,288,360,298.7C480,309,600,299,720,256C840,213,960,139,1080,117.3C1200,96,1320,128,1380,144L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
    @endsection

</body>
</html>