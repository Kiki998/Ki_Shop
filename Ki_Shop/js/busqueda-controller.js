function generarPantalla(){
    $('#results').html('');
    for (var i = 0; i < 10; i++){
        $('#results').append(
            `<div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="card">
                        <img class="card-img-top" src="./img/logo.png">
                        <div class="card-body">
                            NAME<br>
                            <label style="font-family: 'RalewayLigth'; font-size: 10pt">
                                PRICE
                            </label><br>
                            <label>
                                DESCRIPTION
                            </label>
                        </div>
                    </div>
                </div>`
        );
    }
}