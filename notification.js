function error() {
  Swal.fire({
    position: "top-end",
    icon: "error",
    title: "Uw email of password is incorrect",
    showConfirmButton: false,
    timer: 1000,
  });
}

function warnig() {
  Swal.fire({
    position: "top-end",
    icon: "warning",
    title: "Uw account is gedeactiveerd",
    showConfirmButton: false,
    timer: 1000,
  });
}

function pasw() {
  Swal.fire({
    position: "top-end",
    icon: "warning",
    title: "Password is niet hetzelfde",
    showConfirmButton: false,
    timer: 1000,
  });
}

function unkown(){
    Swal.fire({
        position: "top-end",
        icon: "warning",
        title: "Er was een error",
        showConfirmButton: false,
        timer: 1000,
      });
}