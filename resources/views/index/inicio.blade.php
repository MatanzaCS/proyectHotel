@extends('layouts.home')
<script>
$(document).ready(function() {
  $('#inicio').addClass('current');
});
</script>
@section('content')

    <!-- Banner -->
                <section id="banner">
                    <header>
                        <h2><em>Hotel Hostal Keymar Spa Viva la Experiencia ...</em></h2>
                        <a href="#" class="button">Reserve Ahora</a>
                    </header>
                </section>

            <!-- Highlights -->
                <section class="wrapper style1">
                    <div class="container">
                        <div class="row 200%">
                            <section class="4u 12u(narrower)">
                                <div class="box highlight">
                                    <i class="icon major fa-paper-plane"></i>
                                    <h3>This Is Important</h3>
                                    <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                </div>
                            </section>
                            <section class="4u 12u(narrower)">
                                <div class="box highlight">
                                    <i class="icon major fa-pencil"></i>
                                    <h3>kakaka</h3>
                                    <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                </div>
                            </section>
                            <section class="4u 12u(narrower)">
                                <div class="box highlight">
                                    <i class="icon major fa-wrench"></i>
                                    <h3>Probably Important</h3>
                                    <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>

            <!-- Gigantic Heading -->
                <section class="wrapper style2">
                    <div class="container">
                        <header class="major">
                            <h2>A gigantic heading you can use for whatever</h2>
                            <p>With a much smaller subtitle hanging out just below it</p>
                        </header>
                    </div>
                </section>

            <!-- Posts -->
                <section class="wrapper style1">
                    <div class="container">
                        <div class="row">
                            <section class="6u 12u(narrower)">
                                <div class="box post">
                                    <a href="#" class="image left"><img src="images/pic01.jpg" alt="" /></a>
                                    <div class="inner">
                                        <h3>The First Thing</h3>
                                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                    </div>
                                </div>
                            </section>
                            <section class="6u 12u(narrower)">
                                <div class="box post">
                                    <a href="#" class="image left"><img src="images/pic02.jpg" alt="" /></a>
                                    <div class="inner">
                                        <h3>The Second Thing</h3>
                                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="row">
                            <section class="6u 12u(narrower)">
                                <div class="box post">
                                    <a href="#" class="image left"><img src="images/pic03.jpg" alt="" /></a>
                                    <div class="inner">
                                        <h3>The Third Thing</h3>
                                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                    </div>
                                </div>
                            </section>
                            <section class="6u 12u(narrower)">
                                <div class="box post">
                                    <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                                    <div class="inner">
                                        <h3>The Fourth Thing</h3>
                                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>

            <!-- CTA -->
                <section id="cta" class="wrapper style3">
                    <div class="container">
                        <header>
                            <h2>Are you ready to continue your quest?</h2>
                            <a href="#" class="button">Insert Coin</a>
                        </header>
                    </div>
                </section>
@endsection
