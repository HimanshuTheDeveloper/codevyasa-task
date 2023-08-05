function submitForm(event) {
  event.preventDefault();

  // const email = document.getElementById("email").value;
  //   const message = document.getElementById("message").value;

  // Get form inputs
  const firstname = document.getElementById("firstname").value.trim();
  const lastname = document.getElementById("lastname").value.trim();
  const email = document.getElementById("email").value.trim();
  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;

  const name = firstname + " " + lastname;
  // Validation checks
  if (firstname === "") {
    alert("Please enter your First Name.");
    return;
  }

  if (lastname === "") {
    alert("Please enter your Last Name.");
    return;
  }

  if (email === "") {
    alert("Please enter your Email.");
    return;
  }

  if (!validateEmail(email)) {
    alert("Please enter a valid Email address.");
    return;
  }

  if (username === "") {
    alert("Please enter a Username.");
    return;
  }

  if (password === "") {
    alert("Please enter a Password.");
    return;
  }
  if (confirmPassword === "") {
    alert("Please enter a Confirm Password.");
    return;
  }

  if (password !== confirmPassword) {
    alert("Passwords do not match. Please try again.");
    return;
  }

  function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
  }

  const data = {
    name: name,
    email: email,
    password: password,
    username: username,
  };

  fetch("http://localhost/task/submit_data.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  })
    .then((response) => response.json())
    .then((data) => {
      alert(data.success);
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
