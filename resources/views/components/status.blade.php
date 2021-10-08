

        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Wishlist Status</h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>
                    <div>
                        <p class=" @if($type == 'negative') text-danger @elseif($type =='positive') text-primary @else text-gray @endif text-text-danger">
                            <span class="font-bold">{{$growth}}%</span>
                            @if($type == 'negative')
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path class="heroicon-ui" d="M20 9a1 1 0 012 0v8a1 1 0 01-1 1h-8a1 1 0 010-2h5.59L13 10.41l-3.3 3.3a1 1 0 01-1.4 0l-6-6a1 1 0 011.4-1.42L9 11.6l3.3-3.3a1 1 0 011.4 0l6.3 6.3V9z"/></svg>
                            @elseif($type =='positive')
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path class="heroicon-ui" d="M20 15a1 1 0 002 0V7a1 1 0 00-1-1h-8a1 1 0 000 2h5.59L13 13.59l-3.3-3.3a1 1 0 00-1.4 0l-6 6a1 1 0 001.4 1.42L9 12.4l3.3 3.3a1 1 0 001.4 0L20 9.4V15z"/></svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path class="heroicon-ui" d="M17 11a1 1 0 010 2H7a1 1 0 010-2h10z"/></svg>
                            @endif
                        </p>
                    </div>
                </li>
                </ul>


                <button type="button" class="btn btn-primary position-relative">
                    @if($title)
                    <p class="text-lg text-center text-gray-500"> {{ $title }} </p>
                    @endif
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        @if($number)
                        <p class="text-3xl font-semibold text-center text-gray-800">{{ $number }}</p>
                        @endif
                        <span class="visually-hidden">unread messages</span>
                    </span>
                    </button>


            </div>
            </div>
        </div>


