$(document).ready(() => {
  fetch(
    "http://localhost/TNVS-LOGISTIC2/public/audit_management/audit_requests/getAllRequests"
  )
    .then((res) => res.json())
    .then((json) => {
      console.log(json);

      feather.replace();
    });
});
