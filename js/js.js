
    $("document").ready(function () {
        $("body").click(function (event) {
            var targetId = event.target.id;
            switch (targetId) {

                case ("specifyWeight"):
                    $.ajax({
                        type: 'POST',
                        url: 'php/response.php',
                        data: {
                            typeOfVehicle: $("#typeOfVehicle").val(),
                            weight: $("#weight").val(),
                            ajax1: "ajax1"
                        },
                        success: function (data) {
                            $('#inputCharacteristics').html(data);
                        }
                    });
                    break;

                case ("countRoadTax"):
                    console.log($("#vehicleCategory").val());
                    $.ajax({
                        type: 'POST',
                        url: 'php/response.php',
                        data: {
                            vehicleCategory: $("#vehicleCategory").val(),
                            typeOfVehicle: $("#typeOfVehicle").val(),
                            characteristic: $("#characteristic").val(),
                            weightEmpty: $("#weightEmpty").val(),
                            weightFull: $("#weightFull").val(),
                            engineVol: $("#engineVol").val(),
                            fuelType: $("#fuelType").val(),
                            typeTransmission: $("#typeTransmission").val(),
                            numPassenger: $("#numPassenger").val(),
                            bodyType: $("#bodyType").val(),
                            allowedWeightTrailer: $("#allowedWeightTrailer").val(),
                            numAxle: $("#numAxle").val(),
                            ajax2: "ajax2"
                        },
                        success: function (data) {
                            $('#results').html(data);
                        }
                    });
                    break;
            }
        });
    });