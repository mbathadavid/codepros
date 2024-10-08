"use strict";
$(function () {
  var v,
    k = -1,
    f = 0;
  $("#showtoast").click(function () {
    var t,
      o = $("#toastTypeGroup input:radio:checked").val(),
      e = $("#message").val(),
      a = $("#title").val() || "",
      n = $("#showDuration"),
      s = $("#hideDuration"),
      i = $("#timeOut"),
      r = $("#extendedTimeOut"),
      l = $("#showEasing"),
      c = $("#hideEasing"),
      p = $("#showMethod"),
      d = $("#hideMethod"),
      h = f++,
      u = $("#addClear").prop("checked");
    (toastr.options = {
      closeButton: $("#closeButton").prop("checked"),
      debug: $("#debugInfo").prop("checked"),
      newestOnTop: $("#newestOnTop").prop("checked"),
      progressBar: $("#progressBar").prop("checked"),
      positionClass:
        $("#positionGroup input:radio:checked").val() || "toast-top-right",
      preventDuplicates: $("#preventDuplicates").prop("checked"),
      onclick: null,
    }),
      $("#addBehaviorOnToastClick").prop("checked") &&
        (toastr.options.onclick = function () {
          alert("You can perform some custom action after a toast goes away");
        }),
      n.val().length && (toastr.options.showDuration = n.val()),
      s.val().length && (toastr.options.hideDuration = s.val()),
      i.val().length && (toastr.options.timeOut = u ? 0 : i.val()),
      r.val().length && (toastr.options.extendedTimeOut = u ? 0 : r.val()),
      l.val().length && (toastr.options.showEasing = l.val()),
      c.val().length && (toastr.options.hideEasing = c.val()),
      p.val().length && (toastr.options.showMethod = p.val()),
      d.val().length && (toastr.options.hideMethod = d.val()),
      u &&
        ((t = (t = e) || "Clear itself?"),
        (e = t +=
          '<br /><br /><button type="button" class="btn btn-secondary clear">Yes</button>'),
        (toastr.options.tapToDismiss = !1)),
      (e =
        e ||
        (t = [
          "My name is Inigo Montoya. You killed my father. Prepare to die!",
          "Are you the six fingered man?",
          "Inconceivable!",
          "I do not think that means what you think it means.",
          "Have fun storming the castle!",
        ])[(k = ++k === t.length ? 0 : k)]),
      $("#toastrOptions").text(
        'Command: toastr["' +
          o +
          '"]("' +
          e +
          (a ? '", "' + a : "") +
          '")\n\ntoastr.options = ' +
          JSON.stringify(toastr.options, null, 2)
      );
    var g = toastr[o](e, a);
    void 0 !== (v = g) &&
      (g.find("#okBtn").length &&
        g.delegate("#okBtn", "click", function () {
          alert("you clicked me. i was toast #" + h + ". goodbye!"), g.remove();
        }),
      g.find("#surpriseBtn").length &&
        g.delegate("#surpriseBtn", "click", function () {
          alert(
            "Surprise! you clicked me. i was toast #" +
              h +
              ". You could perform an action here."
          );
        }),
      g.find(".clear").length &&
        g.delegate(".clear", "click", function () {
          toastr.clear(g, { force: !0 });
        }));
  }),
    $("#clearlasttoast").click(function () {
      toastr.clear(v);
    }),
    $("#cleartoasts").click(function () {
      toastr.clear();
    });
});
