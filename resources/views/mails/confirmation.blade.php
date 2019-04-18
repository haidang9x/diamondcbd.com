<div align="center">
<img src="https://ci6.googleusercontent.com/proxy/2X640jzYJYagHAimnHoXI7ak8BnCMrwrpRrfoJEQGyWfzDklW0UBaKgqjEEx7x53H0PRdq9x0_WgdJnwuXsOnr_pvwILrmktTt-pu5edcQ=s0-d-e1-ft#https://www.diamondcbd.com/themes/custom/diamondcbd/logo.png" />
</div>
<br/>
Hi {{ $first_name }} {{ $last_name }},<br/>
<br/>
Thank you for registering at Diamond CBD. You may now log in by clicking this link or copying and pasting it into your browser:<br/>
<br/>
{{ route('confirmation', $token) }}<br/>
<br/>
This link can only be used once to log in and will lead you to a page where you can set your password.<br/>
<br/>
After setting your password, you will be able to log in at https://www.diamondcbd.com/user in the future using:<br/>
<br/>
username: {{ $email }}<br/>
password: Your password<br/>
<br/>
-- Diamond CBD team<br/>