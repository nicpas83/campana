$(function () {
    $('#AsistenteJornadasCapacitacion').change(function () {
        $('#cursos').hide();
        $('#boxAsistenteTmpCantHoras').hide();
        if (this.value == '1') {
            $('#cursos').show();
            $('#boxAsistenteTmpCantHoras').show();
        }
        ;
    }).change();

});

function beforeAddRowCursada() {
    return chequearCursosCargados();
}

function beforeUpdateRowCursada(row) {
    return chequearCursosCargados(row);
}

function chequearCursosCargados(row) {
    var err = [];
    var nuevoCurso = $("[name^='data[Cursada][institucion_curso_id]']").val();
    $("table[id='table[Cursada]'] tbody tr").not("[id='table_row[Cursada][" + row + "]']").each(function () {
        var curso = $(this).find("[name$='[institucion_curso_id]']").val();
        if (curso == nuevoCurso) {
            err.push("Ya esta cargado ese Curso");
            return false;
        }
    });
    return err;
}
