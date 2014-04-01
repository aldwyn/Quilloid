<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Cold Fusion example</title>
   </head>
<body>
 <cfoutput>
        <cfif Hour(Now())GT 18>
                Good Evening
        <cfelseif Hour(Now())GT 12>
                 Good Afternoon
        <cfelse>
                Good Morning
        </cfif>
   #variables.FirstName#
 </cfoutput>
</body>
</html>