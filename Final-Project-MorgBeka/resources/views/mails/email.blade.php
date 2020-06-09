<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="../../assets/img/icons/foundation-favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation-emails/2.2.1/foundation-emails.min.css" rel="stylesheet">
  <title>Contact Hello Fresh - {{  $subject ?? '' }}</title>
  </head>
    <body>
      <span class="preheader"></span>

<style type="text/css">
.header {
  background: #F6FCED;
}
.header .columns {
  padding-bottom: 0;
}
.header p {
  color:#9DBF21;
  margin-bottom: 0;
}
.header .wrapper-inner {
  padding: 20px; /*controls the height of the header*/
}
.header .container {
  background: #F6FCED;
}
.wrapper.secondary {
  background: #F6FCED;;
}

.img_email{
    width: 100px;
    height: 70px;
}

.name{
    color: #A69F94;
    font-family: 'avenir';
    text-transform: uppercase;
}

.text{
    color: #A69F94;
    font-family: 'avenir';
}

.message{
    color: #9DBF21;
    font-family: 'avenir';
}
</style>

<table align="center" bgcolor="#8A8A8A" class="wrapper header float-center">
  <tr>
    <td class="wrapper-inner">
      <table align="center" class="container">
        <tbody>
          <tr>
            <td>
              <table class="row collapse">
                <tbody>
                  <tr>
                    <th class="small-6 large-6 columns first" valign="middle">
                      <table>
                        <tr>
                          <th class="box"><img class="img_email" src="{{ asset('../images/logo_hellofresh.png')}}"></th>
                        </tr>
                      </table>
                    </th>
                    <th class="small-6 large-6 columns last" valign="middle">
                      <table>
                        <tr>
                          <th>
                            <p class="text-right">CONTACT HELLO FRESH</p>
                          </th>
                        </tr>
                      </table>
                    </th>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
</table>
<table align="center" class="container float-center">
  <tbody>
    <tr>
      <td>
        <table class="spacer">
          <tbody>
            <tr>
              <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
            </tr>
          </tbody>
        </table>
        <table class="row">
          <tbody>
            <tr>
              <th class="small-12 large-12 columns first last">
                <table>
                  <tr>
                    <th>
                    <h1 class="name">Hallo, {{ $name ?? '' }}</h1>
                        <p class="text">Je stelde een vraag op onze website. <br> We sturen u zo snel mogelijk een antwoord hierop!  <br><br> Met vriendelijke groeten het Hello Fresh-team.<br><br> Hieronder kunt u uw vraag herlezen. <br></p>
                        <p class="message">{{ $messageT  }}</p>
                        <br><br>
                        <p class="text">Klik op de afbeelding hieronder om terug naar onze website te gaan.</p>
                    </th>
                    <tr>
                        <th class="box"><a href="{{route('home') }}" ><img class="img" src="{{ asset('../images/applicatie.jpg')}}"></a></th>
                      </tr>
                    <th class="expander"></th>
                  </tr>
                </table>
              </th>
            </tr>
          </tbody>
        </table>
        <table align="center" class="wrapper secondary">
          <tr>
            <td class="wrapper-inner">
              <table class="spacer">
                <tbody>
                  <tr>
                    <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                  </tr>
                </tbody>
              </table>
              <table class="row">
                <tbody>
                  <tr>
                    <th class="small-12 large-6 columns first">
                      <table>
                        <tr>
                          <th>

                          </th>
                        </tr>
                      </table>
                    </th>
                    <th class="small-12 large-6 columns last">

                    </th>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </tbody>
</table>

    <!-- prevent Gmail on iOS font size manipulation -->
    <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
  </body>
</html>
