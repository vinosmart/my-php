<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Contact Form Validation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .error {
      color: red;
      font-size: 14px;
      margin-top: 5px;
      display: block;
    }
  </style>
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-861967074"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-861967074');
  </script>
</head>

<body>

  <div class="container ">
    <div class="form-inner">
      <form
        style="max-width: 600px; margin: auto; "
        id="home-contact"
        name="homecontact"
        action="mailtest.php"
        method="post"
        autocomplete="off"
        novalidate
        class="pb-20">

        <!-- Name -->
        <div class="mb-3 ">
          <label for="username" class="form-label">Enter Your Name</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Name" required>
          <div id="hname_error" class="error"></div>
        </div>

        <!-- Phone -->
        <div class="mb-3">
          <label for="usernumber" class="form-label">Enter Your Phone Number</label>
          <input type="tel" class="form-control" name="usernumber" id="usernumber" placeholder="Mobile Number" maxlength="10" required>
          <div id="numberError" class="error"></div>
        </div>

        <div class="mb-3">
          <label for="selectedcourse" class="form-label">Select The Course</label>
          <select class="form-control mb-3" id="selectedcourse" name="selectedcourse" required>
            <option value="">Courses</option>
            <option value="Masters In Design & Technology">Masters In Design & Technology
            </option>
            <option value="Masters In Multimedia Design">Masters In Multimedia Design
            </option>
            <option value="Advanced UXUI Design">Advanced UXUI Design</option>
            <option value="Advanced Graphic Design">Advanced Graphic Design</option>
            <option value="Front-End Development">Front-End Development</option>
            <option value="Animation & Video Editing ">Animation & Video Editing
            </option>
            <option value="Graphic Design & UXUI Design">Graphic Design & UXUI Design
            </option>
            <option value="UXUI Design & Development">UXUI Design & Development</option>
            <option value="Digital Marketing ">Digital Marketing </option>
            <option value="Graphic Design & Development ">Graphic Design & Video Editing </option>
          </select>
          <div id="courseError" class="error"></div>
        </div>
        <div class="mb-5">
          <label for="selectedbranch" class="form-label">Select Your Preferred Branch</label>
          <select class="form-control" id="selectedbranch" name="selectedbranch" required>
            <option value="">Select Branch</option>
            <option value="Chennai">Chennai</option>
            <option value="Coimbatore">Coimbatore</option>

            <option value="Madurai">Madurai</option>
            <option value="Nagercoil">Nagercoil</option>
          </select>
          <div id="branchError" class="error"></div>
        </div>

        <!-- Course -->


        <!-- Submit -->
        <div class="text-center ">
          <input type="submit" id="main_banner_form_btn" class="btn btn-warning w-100" value="Send Enquiry" />
        </div>
      </form>
    </div>
  </div>

  <script>
    const form = document.getElementById("home-contact");

    const nameInput = document.getElementById("username");
    const phoneInput = document.getElementById("usernumber");
    const locationInput = document.getElementById("selectedbranch");
    const courseSelect = document.getElementById("selectedcourse");

    const nameError = document.getElementById("hname_error");
    const numberError = document.getElementById("numberError");
    const branchError = document.getElementById("branchError");
    const courseError = document.getElementById("courseError");

    // Name validation
    nameInput.addEventListener("input", () => {
      nameError.textContent = nameInput.value.trim() === "" ? "Name is required." : "";
    });

    // Phone validation
    phoneInput.addEventListener("input", () => {
      phoneInput.value = phoneInput.value.replace(/\D/g, ""); // remove non-numeric
      if (phoneInput.value.length > 10) {
        phoneInput.value = phoneInput.value.slice(0, 10);
      }

      if (phoneInput.value.length < 10) {
        numberError.textContent = "Mobile number must be 10 digits.";
      } else {
        numberError.textContent = "";
      }
    });

    // Location validation
    locationInput.addEventListener("change", () => {
      branchError.textContent = locationInput.value === "" ? "Location is required." : "";
    });

    // Course validation
    courseSelect.addEventListener("change", () => {
      courseError.textContent = courseSelect.value === "" ? "Please select a course." : "";
    });

    // Final form validation
    form.addEventListener("submit", (e) => {
      let isValid = true;

      if (nameInput.value.trim() === "") {
        nameError.textContent = "Name is required.";
        isValid = false;
      }

      if (!/^\d{10}$/.test(phoneInput.value)) {
        numberError.textContent = "Please enter a valid 10-digit mobile number.";
        isValid = false;
      }

      if (locationInput.value === "") {
        branchError.textContent = "Location is required.";
        isValid = false;
      }

      if (courseSelect.value === "") {
        courseError.textContent = "Please select a course.";
        isValid = false;
      }

      if (!isValid) {
        e.preventDefault();
      }
    });
  </script>

</body>

</html>