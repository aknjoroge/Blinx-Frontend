<form class="contact-form" method="POST" action="static/mail.php">
  <label for="firstname">First Name</label><br />
  <input
    name="first-name"
    type="text"
    class="form-input"
    placeholder="First Name"
    required
  /><br />
  <label for="lastname">Last Name</label><br />
  <input
    name="last-name"
    type="text"
    class="form-input"
    placeholder="Last Name"
    required
  /><br />
  <label for="email">Email Address</label><br />
  <input
    name="email"
    type="email"
    class="form-input"
    placeholder="Email Address"
    required
  /><br />
  <label for="phonenumber">Phone Number</label><br />
  <input
    name="phone"
    type="phone"
    class="form-input"
    placeholder="Phone Number"
    required
  /><br />
  <label for="text">How can we help you? Comment?</label><br />
  <textarea
    name="text-content"
    rows="10"
    class="contactus-textarea form-input"
    id="textarea-contactsection"
    placeholder="Type Your Message Here"
    spellcheck="false"
    required
  ></textarea
  ><br />
  <button class="send-button" type="submit">Send</button>
</form>
