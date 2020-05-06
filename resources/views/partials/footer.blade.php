<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title></title>
    </head>
    <body>
        <footer>
            <div class="footer-main">
                <div class="footer-left">
                    <img src="{{asset('img/logo.png')}}" alt="logo">
                    <dl>
                        <dd>Ragione Sociale: La Molisana S.P.A.</dd>
                        <dd>Sede Legale: Contrada Colle delle Api, 100/A</dd>
                        <dd>86100 - Campobasso (CB)</dd>
                        <dd>Pec: lamolisana@pec.it</dd>
                        <dd>Tel: +39 0874 4981</dd>
                        <dd>Fax: +39 0874 629584</dd>
                        <dd>info@lamolisana.it (per segnalazioni degli utenti)</dd>
                        <dd>commerciale@lamolisana.it</dd>
                        <dd>export@lamolisana.it</dd>
                        <dd>numero verde 800818081</dd>
                        <dd>telefono 3801292455</dd>
                    </dl>
                </div>

                <div class="footer-right">
                    <div class="footer-card">
                        <h3>PASTIFICIO</h3>
                        <dl>
                            <dd><a href="#">Il Pastificio</a></dd>
                            <dd><a href="#">Grano decorticato a pietra</a></dd>
                            <dd><a href="#">Il Molise c'è</a></dd>
                            <dd><a href="#">Filiera integrata</a></dd>
                            <dd><a href="#">100 anni di pasta</a></dd>
                            <dd><a href="#">Sartoria della pasta</a></dd>
                            <dd><a href="#">Spaghetto quadrato</a></dd>
                            <dd><a href="#">Le persone</a></dd>
                        </dl>
                    </div>
                    <div class="footer-card">
                        <h3>COLLEZIONE DA CHEF</h3>
                        <dl>
                            <dd><a href="#">Collezione da chef</a></dd>
                            <dd><a href="#">Grandi cucine</a></dd>
                            <dd><a href="#">Biologiche</a></dd>
                            <dd><a href="#">Quadrate</a></dd>
                        </dl>
                    </div>
                    <div class="footer-card">
                        <h3>PRODOTTI</h3>
                        <dl>
                            <dd><a href="#">Le Classiche</a></dd>
                            <dd><a href="#">Le Integrali</a></dd>
                            <dd><a href="#">Le Speciali</a></dd>
                            <dd><a href="#">Le Biologiche</a></dd>
                            <dd><a href="#">Le Gluten-Free</a></dd>
                            <dd><a href="#">Le Semole</a></dd>
                            <dd><a href="#">Le Extra di Lusso</a></dd>
                        </dl>
                    </div>
                </div>
            </div>

            <img src="{{asset('img/montagne.jpg')}}" alt="">
        </footer>
    </body>
</html>
