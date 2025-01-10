@extends('pelanggan.layout.index')

@section('content')
<div class="row mt-4">
    <div class="col-md-3">
        <div class="card" style="width: 14rem;">
            <div class="card-header">
            Kategori
            </div>
            <div class="card-body">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Robusta
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="d-flex flex-column gap-4">
                                <a href="#" class="page-link">
                                    <i class="fas fa-plus"></i>500 gram Robusta
                                </a>
                                <a href="#"  class="page-link">
                                    <i class="fas fa-plus"></i>1 Kg Robusta
                                </a>
                                <a href="#" class="page-link">
                                    <i class="fas fa-plus"></i>5 Kg Robusta
                                </a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Arabica
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="d-flex flex-column gap-4">
                                <a href="#" class="page-link">
                                    <i class="fas fa-plus"></i>500 gram Arabica
                                </a>
                                <a href="#" class="page-link">
                                    <i class="fas fa-plus"></i>1 Kg Arabica
                                </a>
                                <a href="#" class="page-link">
                                    <i class="fas fa-plus"></i>5 Kg Arabica
                                </a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Excelsa
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="d-flex flex-column gap-4">
                                <a href="#" class="page-link">
                                    <i class="fas fa-plus"></i>500 gram Excelsa
                                </a>
                                <a href="#" class="page-link">
                                    <i class="fas fa-plus"></i>1 Kg Excelsa
                                </a>
                                <a href="#" class="page-link">
                                    <i class="fas fa-plus"></i>5 Kg Excelsa
                                </a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            </div>
    </div>
    <div class="col-md-9 d-flex flex-wrap gap-4">
        <div class="card" style="width: 11rem;">
            <div class="card-header m-2" style="border-radius:5px;">
                <img src="{{asset('assets/images/6.png')}}" alt="" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0">Arabica</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 15px; font-weight:400;">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size: 16px;">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 11rem;">
            <div class="card-header m-2" style="border-radius:5px;">
                <img src="{{asset('assets/images/6.png')}}" alt="" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0">Arabica</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 15px; font-weight:400;">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size: 16px;">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 11rem;">
            <div class="card-header m-2" style="border-radius:5px;">
                <img src="{{asset('assets/images/6.png')}}" alt="" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0">Arabica</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 15px; font-weight:400;">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size: 16px;">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 11rem;">
            <div class="card-header m-2" style="border-radius:5px;">
                <img src="{{asset('assets/images/6.png')}}" alt="" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0">Arabica</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 15px; font-weight:400;">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size: 16px;">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 11rem;">
            <div class="card-header m-2" style="border-radius:5px;">
                <img src="{{asset('assets/images/6.png')}}" alt="" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0">Arabica</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 15px; font-weight:400;">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size: 16px;">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 11rem;">
            <div class="card-header m-2" style="border-radius:5px;">
                <img src="{{asset('assets/images/6.png')}}" alt="" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0">Arabica</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 15px; font-weight:400;">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size: 16px;">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 11rem;">
            <div class="card-header m-2" style="border-radius:5px;">
                <img src="{{asset('assets/images/6.png')}}" alt="" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0">Arabica</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 15px; font-weight:400;">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size: 16px;">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width: 11rem;">
            <div class="card-header m-2" style="border-radius:5px;">
                <img src="{{asset('assets/images/6.png')}}" alt="" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0">Arabica</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 15px; font-weight:400;">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size: 16px;">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <nav class="m-auto">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
            </ul>
        </nav>
    </div>

</div>

@endsection
