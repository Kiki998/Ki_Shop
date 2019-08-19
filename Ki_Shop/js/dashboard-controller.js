demo = {
    initDashboardPageCharts: function() {
        Chartist.Pie('#chartStars', {
            labels: ['20%', '20%', '20%', '20%', '20%'],
            series: [20, 20, 20, 20, 20]
        },{
            donut: true,
            donutWidth: 60,
            startAngle: 270,
            total: 200,
        });
        Chartist.Line('#chartSales', {
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
            series: [
                [],[],
                [5, 11, 7, 8, 5, 3, 5, 4, 0, 0, 0, 0, 0, 0, 0, 0]
            ]
        }, {
            high: 15,
            low: 0,
            showArea: true
        });
        const data = {
            labels: ['Jun', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            series: [
                [],[],
                [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]
            ]
        };
        const options = {
            seriesBarDistance: 0,
            axisX: {
                showGrid: false
            },
            height: "245px"
        };
        const responsiveOptions = [
            ['screen and (max-width: 640px)', {
                seriesBarDistance: 0,
                axisX: {
                    labelInterpolationFnc: function(value) {
                        return value[0];
                    }
                }
            }]
        ];
        Chartist.Bar('#chartFollowers', data, options, responsiveOptions);
    }
}

function mostrarModal(tipo){
    var contenido = ""
    if (tipo=='producto'){
        contenido = `<div class="form-group">
                        <label for="nombre">Name</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Description</label>
                        <textarea id="descripcion" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="precio">Price</label>
                        <input type="text" class="form-control" id="precio">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Category</label>
                        <select class="custom-select" id="categoria"></select>
                    </div>
                    <div class="form-group">
                        <label for="imgs">Upload Images</label>
                        <input type="file" class="form-control" id="imgs">
                    </div>`;
    }else if (tipo=='promocion'){
        contenido = `<div class="form-group">
                        <label for="producto">Product Name</label>
                        <select class="custom-select" id="producto"></select>
                    </div>
                    <div class="form-group">
                        <label for="descuento">Discount percentage</label>
                        <input type="text" class="form-control" id="descuento">
                    </div>
                    <div class="form-group">
                        <label for="precioPromo">Promotion Price</label>
                        <input type="text" class="form-control" id="precioPromo" disabled>
                    </div>
                    <div class="form-group">
                        <label for="fechaInicio">Initial Date</label>
                        <input type="date" class="form-control" id="fechaInicio">
                    </div>
                    <div class="form-group">
                        <label for="fechaFin">Final Date</label>
                        <input type="date" class="form-control" id="fechaFin">
                    </div>
                    <div class="form-group">
                        <label for="sucursales">Branch offices</label>
                        <select class="custom-select" id="sucursales" multiple></select>
                    </div>`;
    }else if (tipo=='sucursal'){
        contenido = `<div class="form-group">
                        <label for="nombre">Name</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Address</label>
                        <textarea id="direccion" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="horaApertura">Opening Hours</label>
                        <input type="time" class="form-control" id="horaApertura">
                    </div>
                    <div class="form-group">
                        <label for="horaCierre">Closing Hours</label>
                        <input type="time" class="form-control" id="horaCierre">
                    </div>`;
    }
    $('#modal').html(
        `<div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container col-12">
                        <div class="row">
                            <div class="col-12">
                                ${contenido}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-orange text-white" onclick="guardar(${tipo})">Save</button>
                </div>
            </div>
        </div>`
    );
    $('#modal').modal('show');
}