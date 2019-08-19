function generarPantalla(){
    $('#business').html('');
    for (var i = 0; i < 3; i++){
        $('#business').append(
            `<div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="card">
                        <img class="card-img-top" src="./img/logo.png">
                        <div class="card-body">
                            NAME<br>
                            <label style="font-family: 'RalewayLigth'; font-size: 10pt">
                                working hours
                            </label><br>
                            <label>
                                Address
                            </label>
                        </div>
                    </div>
                </div>`
        );
    }$('#products').html('');
    for (var i = 0; i < 6; i++){
        $('#products').append(
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