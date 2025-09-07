// Aguarda até que o documento HTML seja completamente carregado antes de executar o código JavaScript.
$(document).ready(function() {
  // Chama a função para exibir os eventos no calendário quando o documento estiver pronto.
  display_events();
});

// Função para exibir eventos no calendário.
function display_events() {
  // Cria um array para armazenar os eventos.
  var events = new Array();

  // Realiza uma requisição AJAX para obter os eventos do servidor PHP.
  $.ajax({
      url: "../../controller/c_solicitacao_exibir.php",
      dataType: 'json',
      success: function(response) {
          // Extrai os dados da resposta JSON.
          var result = response.data;

          // Itera sobre os eventos obtidos e os adiciona ao array 'events'.
          $.each(result, function(i, item) {
              events.push({
                  event_id: result[i].event_id,
                  title: result[i].title,
                  start: result[i].start,
                  end: result[i].end,
                  color: result[i].color
              });
          });

          // Inicializa o plugin FullCalendar com as configurações desejadas.
          var calendar = $('#calendar').fullCalendar({
              defaultView: 'month',
              timeZone: 'local',
              editable: true,
              selectable: true,
              selectHelper: true,
              select: function(start, end) {
                  // Função chamada quando o usuário seleciona uma data no calendário.
                  $('#ferias_inicio').val(moment(start).format('YYYY-MM-DD'));
                  $('#ferias_final').val(moment(end).format('YYYY-MM-DD'));
                  $('#event_entry_modal').modal('show');
              },
              events: events, // Adiciona os eventos ao calendário.
              eventRender: function(event, element, view) {
                  // Função chamada para renderizar eventos no calendário.
                  element.bind('click', function() {
                      // Ao clicar em um evento, exibe o ID do evento em um alerta.
                      alert(event.event_id);
                  });
              }
          });
      },
      error: function(xhr, status) {
          // Em caso de erro na requisição AJAX, exibe um alerta com a mensagem de erro.
          alert(response.msg);
      }
  });
}

// Função para salvar um novo evento.
function save_event() {
  // Obtém as datas de início e término das férias a partir dos campos de entrada.
  var ferias_inicio = $("#ferias_inicio").val();
  var ferias_final = $("#ferias_final").val();

  // Verifica se as datas foram preenchidas.
  if (ferias_inicio == "" || ferias_final == "") {
      alert("Por favor, preencha todos os dados.");
      return false;
  }

  // Realiza uma requisição AJAX para registrar as datas de férias no servidor PHP.
  $.ajax({
      url: "../../controller/c_solicitacao_registrar",
      type: "POST",
      dataType: 'json',
      data: {
          ferias_inicio: ferias_inicio,
          ferias_final: ferias_final
      },
      success: function(response) {
          // Fecha o modal de entrada de eventos.
          $('#event_entry_modal').modal('hide');

          // Verifica a resposta do servidor.
          if (response.status == true) {
              alert(response.msg);
              location.reload(); // Recarrega a página após o registro bem-sucedido.
          } else {
              alert(response.msg);
          }
      },
      error: function(xhr, status) {
          // Em caso de erro na requisição AJAX, exibe um alerta com a mensagem de erro.
          console.log('ajax error = ' + xhr.statusText);
          alert(response.msg);
      }
  });

  return false;
}
