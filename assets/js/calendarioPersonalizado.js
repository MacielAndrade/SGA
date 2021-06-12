  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale:'pt-br',
      //initialDate: '2020-09-12',
      initialView: 'timeGridWeek',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      height: 'auto',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      selectMirror: true,
      nowIndicator: true,
      events: '../../controle/list_eventos.php',

      //AO CLICAR NO ITEM
      eventClick: function(info) {
        $("#desmarcar_agendamento").attr("href", "../../controle/excluir_agendamento_script.php?id=" + info.event.id);
        console.log(info.event);
        info.jsEvent.preventDefault();
        $('#visualizar #id').text(info.event.id);
        $('#visualizar #title').text(info.event.title);
        $('#visualizar #start').text(info.event.start.toLocaleString());
        $('#visualizar #end').text(info.event.end.toLocaleString());
      
         $('#visualizar').modal('show');
       },

    //AO CLICAR EM QUALQUER DATA DA TABELA

       selectable: true,
       select: function(info) {
            //alert('Inicio do Agendamento' + info.start.toLocaleString());
            $('#cadastrar #start').val(info.start.toLocaleString());
            $('#cadastrar #end').val(info.end.toLocaleString());
            $('#cadastrar').modal('show');
          }








    });

    calendar.render();
  });


  //função de mascara data e Hora

  function DataHora(evento, objeto) {
    var keypress = (window.event) ? event.keyCode : evento.which;
    campo = eval(objeto);
    if (campo.value == '00/00/0000 00:00:00') {
        campo.value = "";
    }

    caracteres = '0123456789';
    separacao1 = '/';
    separacao2 = ' ';
    separacao3 = ':';
    conjunto1 = 2;
    conjunto2 = 5;
    conjunto3 = 10;
    conjunto4 = 13;
    conjunto5 = 16;
    if ((caracteres.search(String.fromCharCode(keypress)) != -1) && campo.value.length < (19)) {
        if (campo.value.length == conjunto1)
            campo.value = campo.value + separacao1;
        else if (campo.value.length == conjunto2)
            campo.value = campo.value + separacao1;
        else if (campo.value.length == conjunto3)
            campo.value = campo.value + separacao2;
        else if (campo.value.length == conjunto4)
            campo.value = campo.value + separacao3;
        else if (campo.value.length == conjunto5)
            campo.value = campo.value + separacao3;
    } else {
        event.returnValue = false;
    }
}