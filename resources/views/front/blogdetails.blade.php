@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row mb-8">
        <div class="col-lg-8 mb-6 mb-lg-0 position-relative">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->alt }}" class="img-fluid w-100"/>
                    <h3 class="">Course Description</h3>
                    {!! $blog->description !!}
                    {{-- {{ $blog->description }} --}}
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- SIDEBAR FILTER
            ================================================== -->
            <div class="d-block d-block rounded border p-2 shadow mb-6 bg-white">
                <a href="https://www.youtube.com/watch?v=9I-Y6VQ6tyI" class="d-block sk-thumbnail rounded mb-1" data-fancybox>
                    <div class="h-60p w-60p rounded-circle bg-white size-20-all d-inline-flex align-items-center justify-content-center position-absolute center z-index-1">
                        <!-- Icon -->
                        <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z" fill="currentColor"/>
                        </svg>

                    </div>
                    <img class="rounded shadow-light-lg" src="assets/img/products/product-2.jpg" alt="...">
                </a>

                <div class="pt-5 pb-4 px-5 px-lg-3 px-xl-5">
                    <div class="d-flex align-items-center mb-2">
                        <ins class="h2 mb-0">$89.99</ins>
                        <del class="ms-3">339.99</del>
                        <div class="badge badge-lg badge-purple text-white ms-auto fw-normal">91% Off</div>
                    </div>

                    <div class="d-flex align-items-center text-alizarin mb-6">
                        <!-- Icon -->
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.99974 3.0083C5.79444 3.0083 2.37305 6.42973 2.37305 10.635C2.37305 14.8405 5.79448 18.2619 9.99974 18.2619C14.2053 18.2619 17.6264 14.8405 17.6264 10.635C17.6264 6.42973 14.205 3.0083 9.99974 3.0083ZM9.99974 16.8797C6.55666 16.8797 3.7555 14.0783 3.7555 10.6353C3.7555 7.19219 6.55662 4.39103 9.99974 4.39103C13.4428 4.39103 16.244 7.19219 16.244 10.6353C16.244 14.0785 13.4428 16.8797 9.99974 16.8797Z" fill="currentColor"/>
                            <path d="M12.1193 10.4048H10.2761V7.73202C10.2761 7.35022 9.9666 7.04077 9.5848 7.04077C9.20301 7.04077 8.89355 7.35022 8.89355 7.73202V11.0961C8.89355 11.4779 9.20301 11.7873 9.5848 11.7873H12.1194C12.5012 11.7873 12.8106 11.4779 12.8106 11.0961C12.8106 10.7143 12.5011 10.4048 12.1193 10.4048Z" fill="currentColor"/>
                            <path d="M6.08489 15.5823C5.80102 15.3267 5.36391 15.35 5.10864 15.6336L3.0349 17.9378C2.77935 18.2214 2.80263 18.6585 3.08627 18.9138C3.2183 19.033 3.38372 19.0915 3.54849 19.0915C3.73767 19.0915 3.92614 19.0143 4.06255 18.8625L6.13629 16.5583C6.3918 16.2746 6.36852 15.8375 6.08489 15.5823Z" fill="currentColor"/>
                            <path d="M16.9661 17.9381L14.8924 15.634C14.6375 15.3501 14.2002 15.327 13.9163 15.5826C13.6325 15.8379 13.6097 16.275 13.865 16.5586L15.9387 18.8628C16.0749 19.0144 16.2633 19.0916 16.4525 19.0916C16.6171 19.0916 16.7825 19.033 16.9147 18.9141C17.1986 18.6588 17.2214 18.2217 16.9661 17.9381Z" fill="currentColor"/>
                            <path d="M5.96733 1.91597C4.59382 0.571053 2.3798 0.573123 1.03211 1.92105C0.361569 2.59132 -0.00479631 3.47819 4.74212e-05 4.41826C0.00512553 5.34705 0.373327 6.21665 1.03715 6.86689C1.17172 6.99845 1.34614 7.06411 1.52078 7.06411C1.69774 7.06411 1.87469 6.99638 2.00949 6.86181L5.9726 2.8987C6.10303 2.76808 6.17584 2.59085 6.17491 2.40632C6.17401 2.22171 6.09932 2.04523 5.96733 1.91597ZM1.5966 5.31939C1.45813 5.04037 1.38414 4.73162 1.38254 4.41088C1.37953 3.84315 1.60211 3.30581 2.00949 2.89843C2.41594 2.49222 2.95328 2.28921 3.49359 2.28921C3.80949 2.28921 4.12655 2.35855 4.4187 2.49726L1.5966 5.31939Z" fill="currentColor"/>
                            <path d="M18.9673 1.92072C17.6194 0.573026 15.4053 0.570721 14.0318 1.91564C13.9 2.04489 13.8252 2.22142 13.8242 2.40595C13.8233 2.59052 13.8963 2.76794 14.0268 2.89833L17.9899 6.86144C18.1247 6.99648 18.3016 7.06398 18.4786 7.06398C18.6532 7.06398 18.8279 6.99831 18.9622 6.86628C19.6263 6.21628 19.9945 5.34672 19.9993 4.41789C20.0042 3.47809 19.6376 2.59122 18.9673 1.92072ZM18.4028 5.3193L15.5807 2.4972C16.3729 2.12114 17.3459 2.25458 17.9899 2.89856C18.3973 3.30594 18.6199 3.84301 18.6169 4.41102C18.6152 4.73152 18.5413 5.04051 18.4028 5.3193Z" fill="currentColor"/>
                        </svg>

                        <span class="ms-2">2 days left at this price!</span>
                    </div>

                    <button class="btn btn-primary btn-block mb-3" type="button" name="button">BUY NOW</button>
                    <button class="btn btn-orange btn-block mb-6" type="button" name="button">ENROLL</button>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center py-3">
                            <div class="text-secondary d-flex icon-uxs">
                                <!-- Icon -->
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                    <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                </svg>

                            </div>
                            <h6 class="mb-0 ms-3 me-auto">Duration</h6>
                            <span>43 weeks</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-3">
                            <div class="text-secondary d-flex icon-uxs">
                                <!-- Icon -->
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7262 1.94825C13.4059 0.396725 10.401 0.315126 8.00002 1.73839C5.59897 0.315126 2.59406 0.396725 0.273859 1.94825C0.102729 2.06241 -3.54271e-05 2.25456 6.30651e-07 2.46027V14.6553C-0.000323889 14.8826 0.124616 15.0914 0.324917 15.1987C0.525109 15.3058 0.768066 15.294 0.9569 15.168C2.98471 13.8111 5.63063 13.8111 7.65844 15.168C7.66645 15.1735 7.67568 15.1747 7.68368 15.1796C7.69169 15.1846 7.7003 15.1932 7.70953 15.1987C7.73102 15.2079 7.75302 15.2159 7.77538 15.2227C7.79773 15.2329 7.82077 15.2415 7.84428 15.2486C7.87828 15.2564 7.91286 15.2616 7.94766 15.264C7.96551 15.264 7.98213 15.2714 7.99998 15.2714C8.00492 15.2714 8.00982 15.2714 8.01538 15.2714C8.03604 15.2699 8.05655 15.2672 8.07693 15.2634C8.10808 15.2602 8.13895 15.2547 8.16923 15.2467C8.19018 15.2399 8.21074 15.2319 8.23078 15.2227C8.24986 15.2147 8.27016 15.2104 8.28862 15.2006C8.29724 15.1956 8.30402 15.1883 8.31264 15.1827C8.32125 15.1772 8.3311 15.1753 8.33971 15.1698C10.3675 13.8129 13.0134 13.8129 15.0413 15.1698C15.3233 15.3595 15.7057 15.2846 15.8953 15.0026C15.9643 14.9 16.0008 14.779 16 14.6554V2.46027C16 2.25456 15.8973 2.06241 15.7262 1.94825ZM7.38462 13.6036C5.43516 12.6896 3.18022 12.6896 1.23076 13.6036V2.79993C3.12732 1.67313 5.48806 1.67313 7.38462 2.79993V13.6036ZM14.7692 13.6036C12.8198 12.6896 10.5648 12.6896 8.61538 13.6036V2.79993C10.5119 1.67313 12.8727 1.67313 14.7692 2.79993V13.6036Z" fill="currentColor"/>
                                </svg>

                            </div>
                            <h6 class="mb-0 ms-3 me-auto">Lectures</h6>
                            <span>32</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-3">
                            <div class="text-secondary d-flex icon-uxs">
                                <!-- Icon -->
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                </svg>

                            </div>
                            <h6 class="mb-0 ms-3 me-auto">Enrolled</h6>
                            <span>1982 students</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-3">
                            <div class="text-secondary d-flex icon-uxs">
                                <!-- Icon -->
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5936 3.78122H7.72003L6.56976 0.320872C6.50607 0.12928 6.32686 0 6.12495 0H1.40624C0.630839 0 0 0.630839 0 1.40624V10.8124C0 11.5878 0.630839 12.2187 1.40624 12.2187H6.57173L7.71263 15.6698C7.77566 15.8719 7.96259 16 8.1604 16C8.1615 16 8.16259 15.9999 8.16369 15.9999H14.5937C15.3691 15.9999 15.9999 15.369 15.9999 14.5936V5.18746C15.9999 4.41206 15.369 3.78122 14.5936 3.78122ZM1.40624 11.2812C1.14777 11.2812 0.937493 11.0709 0.937493 10.8124V1.40624C0.937493 1.14777 1.14777 0.937493 1.40624 0.937493H5.7868L9.22511 11.2812C7.46913 11.2812 3.14004 11.2812 1.40624 11.2812ZM9.14771 12.2187L8.22897 14.2449L7.55913 12.2187H9.14771ZM15.0624 14.5936C15.0624 14.8521 14.8521 15.0624 14.5936 15.0624H8.88768L10.3018 11.9435C10.3525 11.8316 10.3549 11.7077 10.3197 11.6018L8.03166 4.71871H14.5936C14.8521 4.71871 15.0624 4.92899 15.0624 5.18746V14.5936Z" fill="currentColor"/>
                                    <path d="M6.12497 5.65623H4.71873C4.45986 5.65623 4.24998 5.8661 4.24998 6.12497C4.24998 6.38385 4.45986 6.59372 4.71873 6.59372H5.5756C5.3821 7.13931 4.86107 7.53121 4.24998 7.53121C3.47458 7.53121 2.84374 6.90037 2.84374 6.12497C2.84374 5.34958 3.47458 4.71874 4.24998 4.71874C4.6256 4.71874 4.97873 4.86502 5.24435 5.13061C5.42738 5.31367 5.72419 5.31367 5.90725 5.13061C6.09028 4.94755 6.09028 4.65077 5.90725 4.46771C5.46457 4.02503 4.87601 3.78125 4.24998 3.78125C2.95765 3.78125 1.90625 4.83264 1.90625 6.12497C1.90625 7.4173 2.95765 8.4687 4.24998 8.4687C5.54232 8.4687 6.59371 7.4173 6.59371 6.12497C6.59371 5.8661 6.38384 5.65623 6.12497 5.65623Z" fill="currentColor"/>
                                    <path d="M13.625 7.53124H12.2187V7.0625C12.2187 6.80362 12.0089 6.59375 11.75 6.59375C11.4911 6.59375 11.2812 6.80362 11.2812 7.0625V7.53124H9.875C9.61612 7.53124 9.40625 7.74112 9.40625 7.99999C9.40625 8.25886 9.61612 8.46874 9.875 8.46874H12.5981C12.449 8.91201 12.1287 9.43735 11.7563 9.94291C11.6761 9.8346 11.5968 9.72376 11.5204 9.61138C11.3748 9.39729 11.0833 9.34176 10.8692 9.48735C10.6551 9.63291 10.5997 9.92447 10.7452 10.1386C10.8767 10.332 11.0146 10.5202 11.152 10.6985C10.9177 10.9702 10.6868 11.2163 10.4842 11.4154C10.2994 11.5967 10.2966 11.8935 10.4779 12.0783C10.6585 12.2623 10.9552 12.2666 11.1408 12.0846C11.157 12.0687 11.4126 11.8169 11.7541 11.4303C12.0873 11.8115 12.3367 12.0621 12.356 12.0814C12.539 12.2644 12.8357 12.2645 13.0188 12.0815C13.2019 11.8985 13.202 11.6017 13.019 11.4186C13.0141 11.4137 12.7271 11.1251 12.3609 10.698C13.0245 9.84029 13.429 9.09314 13.5691 8.46874H13.6249C13.8838 8.46874 14.0937 8.25886 14.0937 7.99999C14.0937 7.74112 13.8839 7.53124 13.625 7.53124Z" fill="currentColor"/>
                                </svg>

                            </div>
                            <h6 class="mb-0 ms-3 me-auto">Language</h6>
                            <span>English</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-3">
                            <div class="text-secondary d-flex icon-uxs">
                                <!-- Icon -->
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4286 7.42841H6.20457C5.89469 6.21086 4.65646 5.47506 3.43888 5.78494C2.63143 5.99045 2.00093 6.62095 1.79541 7.42841H0.571439C0.255837 7.42841 0 7.68424 0 7.99985C0 8.31545 0.255837 8.57125 0.571439 8.57125H1.79545C2.10532 9.7888 3.34356 10.5246 4.56114 10.2147C5.36859 10.0092 5.99909 9.37871 6.20461 8.57125H15.4286C15.7442 8.57125 16 8.31542 16 7.99981C16 7.68421 15.7442 7.42841 15.4286 7.42841ZM4.00001 9.14269C3.36884 9.14269 2.85716 8.63102 2.85716 7.99985C2.85716 7.36868 3.36884 6.857 4.00001 6.857C4.63118 6.857 5.14285 7.36868 5.14285 7.99985C5.14285 8.63102 4.63118 9.14269 4.00001 9.14269Z" fill="currentColor"/>
                                    <path d="M15.4286 1.71405H13.6331C13.3233 0.496508 12.085 -0.239295 10.8675 0.0705817C10.06 0.276095 9.4295 0.906597 9.22399 1.71405H0.571439C0.255837 1.71405 0 1.96989 0 2.28549C0 2.60109 0.255837 2.85693 0.571439 2.85693H9.22399C9.53387 4.07447 10.7721 4.81028 11.9897 4.5004C12.7971 4.29489 13.4276 3.66438 13.6331 2.85693H15.4286C15.7442 2.85693 16 2.60109 16 2.28549C16 1.96989 15.7442 1.71405 15.4286 1.71405ZM11.4286 3.42834C10.7974 3.42834 10.2857 2.91666 10.2857 2.28549C10.2857 1.65432 10.7974 1.14265 11.4286 1.14265C12.0598 1.14265 12.5714 1.65432 12.5714 2.28549C12.5714 2.91666 12.0598 3.42834 11.4286 3.42834Z" fill="currentColor"/>
                                    <path d="M15.4286 13.1428H12.4903C12.1804 11.9252 10.9422 11.1894 9.72458 11.4993C8.91713 11.7048 8.28662 12.3353 8.08111 13.1428H0.571439C0.255837 13.1428 0 13.3986 0 13.7142C0 14.0297 0.255837 14.2856 0.571439 14.2856H8.08114C8.39102 15.5032 9.62926 16.239 10.8468 15.9291C11.6543 15.7236 12.2848 15.0931 12.4903 14.2856H15.4286C15.7442 14.2856 16 14.0298 16 13.7142C16 13.3986 15.7442 13.1428 15.4286 13.1428ZM10.2857 14.8571C9.65454 14.8571 9.14286 14.3454 9.14286 13.7142C9.14286 13.083 9.65454 12.5714 10.2857 12.5714C10.9169 12.5714 11.4286 13.083 11.4286 13.7142C11.4286 14.3454 10.9169 14.8571 10.2857 14.8571Z" fill="currentColor"/>
                                </svg>

                            </div>
                            <h6 class="mb-0 ms-3 me-auto">Skill level</h6>
                            <span>beginner</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-3">
                            <div class="text-secondary d-flex icon-uxs">
                                <!-- Icon -->
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7188 9.8575V3.1875C15.7188 2.41209 15.0879 1.78125 14.3125 1.78125H12.4688V1.25C12.4688 0.991125 12.2589 0.78125 12 0.78125C11.7411 0.78125 11.5312 0.991125 11.5312 1.25V1.78125H8.46875V1.25C8.46875 0.991125 8.25887 0.78125 8 0.78125C7.74113 0.78125 7.53125 0.991125 7.53125 1.25V1.78125H4.46875V1.25C4.46875 0.991125 4.25887 0.78125 4 0.78125C3.74113 0.78125 3.53125 0.991125 3.53125 1.25V1.78125H1.40625C0.630844 1.78125 0 2.41209 0 3.1875V11.8125C0 12.5879 0.630844 13.2188 1.40625 13.2188H8.68531C9.35484 14.4112 10.6317 15.2188 12.0938 15.2188C14.2477 15.2188 16 13.4664 16 11.3125C16 10.7985 15.9 10.3074 15.7188 9.8575ZM12.5625 8.38087C13.8248 8.58197 14.8243 9.58144 15.0254 10.8438H12.5625V8.38087ZM1.40625 12.2812C1.14778 12.2812 0.9375 12.071 0.9375 11.8125V3.1875C0.9375 2.92903 1.14778 2.71875 1.40625 2.71875H3.53125V3.28125C3.53125 3.54012 3.74113 3.75 4 3.75C4.25887 3.75 4.46875 3.54012 4.46875 3.28125V2.71875H7.53125V3.28125C7.53125 3.54012 7.74113 3.75 8 3.75C8.25887 3.75 8.46875 3.54012 8.46875 3.28125V2.71875H11.5312V3.28125C11.5312 3.54012 11.7411 3.75 12 3.75C12.2589 3.75 12.4688 3.54012 12.4688 3.28125V2.71875H14.3125C14.571 2.71875 14.7812 2.92903 14.7812 3.1875V8.48034C14.0805 7.81506 13.134 7.40625 12.0938 7.40625C9.93984 7.40625 8.1875 9.15859 8.1875 11.3125C8.1875 11.6468 8.22978 11.9713 8.30916 12.2812H1.40625ZM12.0938 14.2812C10.4568 14.2812 9.125 12.9495 9.125 11.3125C9.125 9.83503 10.21 8.60631 11.625 8.38087V11.3125C11.625 11.5714 11.8349 11.7812 12.0938 11.7812H15.0254C14.7999 13.1962 13.5712 14.2812 12.0938 14.2812Z" fill="currentColor"/>
                                    <path d="M3.25 5.78125H2.5C2.24112 5.78125 2.03125 5.99112 2.03125 6.25C2.03125 6.50888 2.24112 6.71875 2.5 6.71875H3.25C3.50888 6.71875 3.71875 6.50888 3.71875 6.25C3.71875 5.99112 3.50888 5.78125 3.25 5.78125Z" fill="currentColor"/>
                                    <path d="M6 5.78125H5.25C4.99112 5.78125 4.78125 5.99112 4.78125 6.25C4.78125 6.50888 4.99112 6.71875 5.25 6.71875H6C6.25888 6.71875 6.46875 6.50888 6.46875 6.25C6.46875 5.99112 6.25888 5.78125 6 5.78125Z" fill="currentColor"/>
                                    <path d="M6 7.78125H5.25C4.99112 7.78125 4.78125 7.99112 4.78125 8.25C4.78125 8.50888 4.99112 8.71875 5.25 8.71875H6C6.25888 8.71875 6.46875 8.50888 6.46875 8.25C6.46875 7.99112 6.25888 7.78125 6 7.78125Z" fill="currentColor"/>
                                    <path d="M3.25 7.78125H2.5C2.24112 7.78125 2.03125 7.99112 2.03125 8.25C2.03125 8.50888 2.24112 8.71875 2.5 8.71875H3.25C3.50888 8.71875 3.71875 8.50888 3.71875 8.25C3.71875 7.99112 3.50888 7.78125 3.25 7.78125Z" fill="currentColor"/>
                                    <path d="M3.25 9.78125H2.5C2.24112 9.78125 2.03125 9.99112 2.03125 10.25C2.03125 10.5089 2.24112 10.7188 2.5 10.7188H3.25C3.50888 10.7188 3.71875 10.5089 3.71875 10.25C3.71875 9.99112 3.50888 9.78125 3.25 9.78125Z" fill="currentColor"/>
                                    <path d="M6 9.78125H5.25C4.99112 9.78125 4.78125 9.99112 4.78125 10.25C4.78125 10.5089 4.99112 10.7188 5.25 10.7188H6C6.25888 10.7188 6.46875 10.5089 6.46875 10.25C6.46875 9.99112 6.25888 9.78125 6 9.78125Z" fill="currentColor"/>
                                </svg>

                            </div>
                            <h6 class="mb-0 ms-3 me-auto">Deadline</h6>
                            <span>06 April 2020</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-3">
                            <div class="text-secondary d-flex icon-uxs">
                                <!-- Icon -->
                                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5465 5.13024L15.2322 4.02945L14.9329 2.34131C14.8335 1.78023 14.348 1.37335 13.7783 1.37335C13.778 1.37335 13.7775 1.37335 13.7772 1.37335L12.0628 1.37488L10.7485 0.274205C10.3114 -0.0919028 9.67738 -0.0913556 9.24091 0.275574L7.92861 1.37875L6.2142 1.38035C5.64405 1.3809 5.15872 1.78887 5.06026 2.35042L4.76408 4.03907L3.45178 5.14228C3.01535 5.50917 2.90582 6.13362 3.19137 6.62712L4.04992 8.1111L3.75378 9.79967C3.65524 10.3613 3.97276 10.91 4.50875 11.1046L5.9543 11.6292L5.95989 18.8268C5.95989 19.2647 6.20095 19.6629 6.58899 19.8659C6.76059 19.9556 6.94712 20 7.13295 20C7.36737 20 7.60062 19.9294 7.8013 19.7901L9.9861 18.2734L12.1709 19.7901C12.5306 20.0398 12.9951 20.0689 13.3832 19.8659C13.7712 19.6629 14.0123 19.2647 14.0123 18.8268V11.6377L15.5005 11.0945C16.0361 10.899 16.3526 10.3496 16.2531 9.78825L15.9538 8.10015L16.8096 6.61461C17.0943 6.12056 16.9836 5.49631 16.5465 5.13024ZM10.3205 17.078C10.1194 16.9385 9.85281 16.9385 9.65178 17.078L7.13264 18.8265C7.13264 18.8264 7.13264 18.8263 7.13264 18.8263L7.12842 13.3771C7.35154 13.6218 7.66652 13.7592 7.99315 13.7592C8.12738 13.7592 8.26357 13.7361 8.39608 13.6877L10.0065 13.0999L11.6181 13.6848C12.0517 13.842 12.5242 13.7298 12.8396 13.4196L12.8395 18.8266L10.3205 17.078ZM14.9377 7.51475C14.8003 7.75327 14.7511 8.03382 14.7992 8.30482L15.0984 9.99292L13.4878 10.5808C13.286 10.6545 13.1095 10.783 12.9761 10.949C12.9697 10.9566 12.9639 10.9647 12.9579 10.9727C12.9277 11.0123 12.899 11.0533 12.8739 11.0969L12.0185 12.5825C12.0185 12.5825 12.0183 12.5825 12.0181 12.5824L10.4065 11.9976C10.1478 11.9037 9.86297 11.9039 9.6044 11.9983L7.99393 12.5861L7.13538 11.1022C7.08925 11.0224 7.03339 10.9496 6.97073 10.8835C6.96507 10.8774 6.95975 10.871 6.95381 10.8652C6.83236 10.7425 6.68464 10.6468 6.52039 10.5871L4.90882 10.0022L5.205 8.31358C5.2525 8.04245 5.20277 7.76199 5.06495 7.52378L4.20639 6.03984L5.51869 4.93663C5.72942 4.75952 5.87163 4.51263 5.91912 4.24159L6.2153 2.55298L7.92963 2.55138C8.20489 2.55114 8.47254 2.45346 8.68319 2.27635L9.99549 1.17318L11.3098 2.27389C11.5205 2.45041 11.7879 2.54759 12.0629 2.54759H12.0638L13.7783 2.54602L14.0775 4.23416C14.1255 4.50517 14.2682 4.75166 14.4792 4.92842L15.7935 6.02921L14.9377 7.51475Z" fill="currentColor"/>
                                    <path d="M9.99928 3.64673C8.13493 3.64673 6.61816 5.1635 6.61816 7.02785C6.61816 8.89221 8.13493 10.409 9.99928 10.409C11.8636 10.409 13.3804 8.89221 13.3804 7.02785C13.3804 5.1635 11.8636 3.64673 9.99928 3.64673ZM9.99928 9.23631C8.78154 9.23631 7.79083 8.2456 7.79083 7.02785C7.79083 5.81011 8.78154 4.8194 9.99928 4.8194C11.217 4.8194 12.2078 5.81011 12.2078 7.02785C12.2078 8.2456 11.217 9.23631 9.99928 9.23631Z" fill="currentColor"/>
                                </svg>

                            </div>
                            <h6 class="mb-0 ms-3 me-auto">Certificate</h6>
                            <span>Yes</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-4">
                            <a href="course-single-v5.html" class="mx-auto text-teal fw-medium d-flex align-items-center mt-2">
                                <!-- Icon -->
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.0283 6.25C14.3059 6.25 12.9033 4.84833 12.9033 3.125C12.9033 1.40167 14.3059 0 16.0283 0C17.7509 0 19.1533 1.40167 19.1533 3.125C19.1533 4.84833 17.7509 6.25 16.0283 6.25ZM16.0283 1.25C14.995 1.25 14.1533 2.09076 14.1533 3.125C14.1533 4.15924 14.995 5 16.0283 5C17.0616 5 17.9033 4.15924 17.9033 3.125C17.9033 2.09076 17.0616 1.25 16.0283 1.25Z" fill="currentColor"/>
                                    <path d="M16.0283 20C14.3059 20 12.9033 18.5983 12.9033 16.875C12.9033 15.1517 14.3059 13.75 16.0283 13.75C17.7509 13.75 19.1533 15.1517 19.1533 16.875C19.1533 18.5983 17.7509 20 16.0283 20ZM16.0283 15C14.995 15 14.1533 15.8408 14.1533 16.875C14.1533 17.9092 14.995 18.75 16.0283 18.75C17.0616 18.75 17.9033 17.9092 17.9033 16.875C17.9033 15.8408 17.0616 15 16.0283 15Z" fill="currentColor"/>
                                    <path d="M3.94531 13.125C2.22275 13.125 0.820312 11.7233 0.820312 10C0.820312 8.27667 2.22275 6.875 3.94531 6.875C5.66788 6.875 7.07031 8.27667 7.07031 10C7.07031 11.7233 5.66788 13.125 3.94531 13.125ZM3.94531 8.125C2.91199 8.125 2.07031 8.96576 2.07031 10C2.07031 11.0342 2.91199 11.875 3.94531 11.875C4.97864 11.875 5.82031 11.0342 5.82031 10C5.82031 8.96576 4.97864 8.125 3.94531 8.125Z" fill="currentColor"/>
                                    <path d="M6.12066 9.39154C5.90307 9.39154 5.69143 9.27817 5.57729 9.0766C5.40639 8.77661 5.51061 8.39484 5.8106 8.22409L13.5431 3.81568C13.8422 3.64325 14.2247 3.74823 14.3947 4.04914C14.5656 4.34912 14.4614 4.73075 14.1614 4.90164L6.42888 9.30991C6.33138 9.36484 6.22564 9.39154 6.12066 9.39154Z" fill="currentColor"/>
                                    <path d="M13.8524 16.2665C13.7475 16.2665 13.6416 16.2398 13.5441 16.1841L5.81151 11.7757C5.51152 11.6049 5.40745 11.2231 5.5782 10.9232C5.74818 10.6224 6.12996 10.5182 6.42994 10.6899L14.1623 15.0981C14.4623 15.269 14.5665 15.6506 14.3958 15.9506C14.2807 16.1531 14.0691 16.2665 13.8524 16.2665Z" fill="currentColor"/>
                                </svg>

                                <span class="ms-3">Share this course</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="d-none">
                <div class="border rounded px-6 px-lg-5 px-xl-6 pt-5 shadow">
                    <h3 class="mb-5">Latest Courses</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="media mb-6 d-flex">
                            <a href="course-single-v5.html" class="w-100p d-block me-5">
                                <img src="assets/img/photos/photo-1.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                            </a>
                            <div class="media-body flex-grow-1">
                                <a href="course-single-v5.html" class="d-block">
                                    <h6 class="line-clamp-2 mb-3">Web Developtment and Design</h6>
                                </a>
                                <del class="font-size-sm me-2">$959</del>
                                <ins class="h6 mb-0 ">$415.99</ins>
                            </div>
                        </li>

                        <li class="media mb-6 d-flex">
                            <a href="course-single-v5.html" class="w-100p d-block me-5">
                                <img src="assets/img/photos/photo-2.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                            </a>
                            <div class="media-body flex-grow-1">
                                <a href="course-single-v5.html" class="d-block">
                                    <h6 class="line-clamp-2 mb-3">The Complete Cyber Security Course : Hackers </h6>
                                </a>
                                <del class="font-size-sm me-2">$959</del>
                                <ins class="h6 mb-0 ">$415.99</ins>
                            </div>
                        </li>

                        <li class="media mb-6 d-flex">
                            <a href="course-single-v5.html" class="w-100p d-block me-5">
                                <img src="assets/img/photos/photo-14.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                            </a>
                            <div class="media-body flex-grow-1">
                                <a href="course-single-v5.html" class="d-block">
                                    <h6 class="line-clamp-2 mb-3">Fashion Photography From Professional</h6>
                                </a>
                                <del class="font-size-sm me-2">$959</del>
                                <ins class="h6 mb-0 ">$415.99</ins>
                            </div>
                        </li>

                        <li class="media mb-6 d-flex">
                            <a href="course-single-v5.html" class="w-100p d-block me-5">
                                <img src="assets/img/photos/photo-16.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                            </a>
                            <div class="media-body flex-grow-1">
                                <a href="course-single-v5.html" class="d-block">
                                    <h6 class="line-clamp-2 mb-3">The Complete Financial Analyst Course 2020</h6>
                                </a>
                                <del class="font-size-sm me-2">$959</del>
                                <ins class="h6 mb-0 ">$415.99</ins>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="text-center mb-5 mb-md-8">
        <h1>Related Courses</h1>
        <p class="font-size-lg text-capitalize">Discover your perfect program in our courses.</p>
    </div>

    <div class="mx-n4 mb-12" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
        @foreach ($relatedBlog as $item)
            <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5" style="padding-right:15px;padding-left:15px;">
                <!-- Card -->
                <div class="card border shadow-dark-hover p-2 sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                        <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                            <img class="rounded shadow-light-lg" src="{{ asset($item->image) }}" alt="{{ $item->alt }}">
                        </a>

                        <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                            <ins class="h5 mb-0 text-white">$415.99</ins>
                        </span>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                        <!-- Preheading -->
                        <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                        <!-- Heading -->
                        <div class="position-relative">
                            <a href="course-single-v5.html" class="d-block stretched-link"><h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h5></a>

                            <div class="row mx-n2 align-items-end">
                                <div class="col px-2">
                                    <ul class="nav mx-n3">
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">5 lessons</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-auto px-2 text-right">
                                    <div class="star-rating mb-2 mb-lg-0">
                                        <div class="rating" style="width:100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        @endforeach
    </div>
</div>
@endsection