document.getElementById("loginForm").onsubmit = async function (e) {
  e.preventDefault();
  const form = e.target;
  const data = {
    username: form.username.value,
    password: form.password.value,
  };
  const res = await fetch("/project web klmpk/api.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data),
  });
  const result = await res.json();
  document.getElementById("result").innerText = result.message;
  if (result.success) {
    // Redirect jika login berhasil
    window.location.href = "/project web klmpk/admin/visitors.php";
  }
};
