<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'hercarerejuvenationclinic@gmail.com';
  $mail->Password = 'yxvrosmckhxwuppm';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('hercarerejuvenationclinic@gmail.com','Booking A Appointment');
  $mail->addAddress('hercarerejuvenationclinic@gmail.com');
  $mail->addAddress('hercarerejuvenationclinic@gmail.com');
  $mail->isHTML(true);
  $mail->Subject = $_POST["purpose"];
  $mail->Body = "<b>Patient Name :</b> ".$_POST["name"]."<br>".
                "<b>Age :</b> ".$_POST["age"]."<br>".
                "<b>Purpose :</b> ".$_POST["purpose"]."<br>".
                "<b>Appointment Date :</b> ".$_POST["date"]."<br>".
                "<b>Address :</b> ".$_POST["address"]."<br>".
                "<b>Mobile No. :</b> ".$_POST["mob_no"]."<br>".
                "<b>Fees :</b> ".$_POST["fees"]."<br>".
                "<b>Transaction Id :</b> ".$_POST["transaction_id"];
  if($mail->send()){
    echo "<script>alert('Form submit sucessfully owner will be contact soon...')</script>";
    echo "<script>location.href='get_appointment.html'</script>";
  }
  else{
    echo "<script>alert('Error please try again')</script>";
  }
}
?>











<!--
                    <form action="mailvalidating.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name="name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email"  placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name="subject" id="subject"  placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control"   name="message" id="message" placeholder="Leave a message here" style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit"  name="send">Send Message</button>
                            </div>
                        </div>
                    </form>


-->