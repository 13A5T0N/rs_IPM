function error() {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Uw email of password is incorrect",
      showConfirmButton: false,
      timer: 1500,
    });
  }

  function welcome() {
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "welkom",
      showConfirmButton: false,
      timer: 1500,
    });
  }

  function reset() {
    Swal.fire({
      position: "top-end",
      icon: "warning",
      title: "Uw password is gereset",
      showConfirmButton: false,
      timer: 1500,
    });
  }

  function admin_ad() {
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Admin account toegevoegd",
      showConfirmButton: false,
      timer: 2000,
    });
  }

  function admin_edit() {
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Admin account gewijzigd",
      showConfirmButton: false,
      timer: 2000,
    });
  }

  function admin_delete() {
    Swal.fire({
      position: "top-end",
      icon: "warning",
      title: "Admin account verwijderd",
      showConfirmButton: false,
      timer: 1500,
    });
  }

  function student_ad() {
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Student account toegevoegd",
      showConfirmButton: false,
      timer: 2000,
    });
  }

  function student_import() {
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Studenten accounts geimporteerd",
      showConfirmButton: false,
      timer: 2000,
    });
  }

  function student_edit() {
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Student account gewijzigd",
      showConfirmButton: false,
      timer: 2000,
    });
  }

  function student_delete() {
    Swal.fire({
      position: "top-end",
      icon: "warning",
      title: "Studen account verwijderd",
      showConfirmButton: false,
      timer: 1500,
    });
  }