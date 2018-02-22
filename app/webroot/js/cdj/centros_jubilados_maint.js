function beforeLoadAddRowSolicitudTaller() {
    $("button.close").hide();

    $('#SolicitudTallerEstado').change(function () {
        var bool = this.value == 'Asignado';
        obligatorio("SolicitudTaller", "profesor_id", bool);
        obligatorio("SolicitudTaller", "fecha_hora", bool);
        displayField("SolicitudTaller", "profesor_id", bool);
        displayField("SolicitudTaller", "fecha_hora", bool);
       
    }).change();


}

$(function () {

    $('#CentroJubiladoReempadronamiento').change(function () {
        $('#boxCentroJubiladoFechaReempadronamiento').hide();
        $('#boxCentroJubiladoReempPendientes').hide();
        $('#boxCentroJubiladoReempObservaciones').hide();
        if (this.value == 1) {
            $('#boxCentroJubiladoFechaReempadronamiento').show();
            $('#boxCentroJubiladoReempPendientes').show();
            $('#boxCentroJubiladoReempObservaciones').show();
        }
    }).change();
    
    $('#CentroJubiladoPendientes').change(function () {
        $('#boxCentroJubiladoObservaciones').hide();
        if (this.value == 1) {
            $('#boxCentroJubiladoObservaciones').show();
        }
    }).change();

    $('#CentroJubiladoCursosCapacitaciones').change(function () {
        $('#cursos_capacitaciones').hide();  //id puesto en la vista
        if (this.value == 'Si') {
            $('#cursos_capacitaciones').show();
        }
    }).change();


    $('#CentroJubiladoActividadesVoluntariado').change(function () {
        $('#socios_voluntarios').hide();  //id puesto en la vista
        if (this.value == 'Si') {
            $('#socios_voluntarios').show();
        }
    }).change();
    
    $('#CentroJubiladoSolicitudTalleres').change(function () {
        $('#solicitud_talleres').hide();  //id puesto en la vista
        if (this.value == 'Si') {
            $('#solicitud_talleres').show();
        }
    }).change();
    
    $('#CentroJubiladoSubsidiosAsignados').change(function () {
        $('#subsidios').hide();  //id puesto en la vista
        if (this.value == 'Si') {
            $('#subsidios').show();
        }
    }).change();
    

});
