<!DOCTYPE html>
 2. <style>
 3.     table,
 4.     th,
 5.     td{ 
6.         border: 1px solid red;
 7.     }
 8.   
9.     table{ 
10.         border-collapse: collapse; 
11.         width: 100%; 
12.     } 
13.   
14.     th{ 
15.         height: 50px; 
16.     } 
17.   
18.     th, 
19.     td{ 
20.         padding: 15px; 
21.         text-align: left; 
22.     } 
23.   
24. </style> 
25. <html> 
26. <head> 
27.     <title>Dasar Html</title> 
28. </head> 
29. <body> 
30.     <table> 
31.         <tr> 
32.             <th>No</th> 
33.             <th>Nama</th> 
34.             <th>Alamat</th> 
35.         </tr> 
36.         <tr> 
37.             <td>1</td> 
38.             <td>Roy</td> 
39.             <td rowspan="3">Bandung</td> 
40.         </tr> 
41.         <tr> 
42.             <td>2</td> 
43.             <td>Si Boy</td> 
44.         </tr> 
45.         <tr> 
46.             <td>3</td> 
47.             <td>Roni</td> 
48.         </tr> 
49.     </table> 
50. </body> 
51. </html>  