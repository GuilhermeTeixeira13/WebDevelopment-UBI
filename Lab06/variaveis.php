<HTML>
<HEAD>
<TITLE>Example.com greeting</TITLE>
</HEAD>
<BODY>
<P>Hello,
<?php // We have now escaped into 
//PHP mode.
// Instead of static variables, the next three lines
// could easily be database calls or even cookies; 
// or they could have been passed from a form.
$firstname = 'Joyce';
$lastname = 'Park'; 
$title = 'Ms.'; echo
"$title $lastname";
// OK, we are going back to HTML now.
?>
. We know who you are! Your first name is <?php echo $firstname; ?>.</P> 
<P>You are visiting our site at <?php echo date('Y-m-d H:i:s');?></P> 
<P>Here is a link to your account management page: 
<A HREF="http://www.example.com/accounts/<?php echo "$firstname$lastname"; ?>/"><?php echo
$firstname; ?>'s account management page</A>
</P>
</BODY>
</HTML>