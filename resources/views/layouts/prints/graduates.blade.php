


<!doctype html>
<html lang="en">
    <head>
        <style>
            table, td, th {
                border: .5px solid black;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }    
            th {
                padding: 5px;
            }
            td {
                padding: 2px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        
        <?php 
            $scholars = json_encode($scholars); 
            $scholars = json_decode($scholars, true);    

            $agency = json_encode($agency); 
            $agency = json_decode($agency, true);   

            $group = json_encode($group); 
            $group = json_decode($group, true);  
        ?>
      

        <div style="font-family:Calibri">
            <img src="{{ asset('images/sei.png') }}" alt="tag" style="position: absolute; top: 3; left: 260; width: 35px; height: 35px;">
            <img src="{{ asset('images/dost.png') }}" alt="tag" style="position: absolute; top: 3; left: 490; width: 35px; height: 35px;">
            
            <center style="font-size: 12px;">SCIENCE EDUCATION INSTITUTE</center>
            <center style="font-size: 10px; font-weight: bold;">DEPARTMENT OF SCIENCE AND TECHNOLOGY</center>
            <center style="font-size: 11px;">DOST - {{ strtoupper($agency['region']['region'])}}</center>
            <br>
            <center style="font-size: 14px; font-weight: bold;">LIST OF DOST-SEI SCHOLAR-GRADUATES</center>
            <center style="font-size: 10px;">(AS OF {{ strtoupper($group['semester']['name'])}} - AY {{ strtoupper($group['academic_year'])}})</center>
        </div>

        <table style="width:100%; font-size: 10px; padding: 20px; font-family:Arial, Helvetica, sans-serif">
            <thead>
                <tr style="background-color: #a7dceb;">
                    <th width="5%">No.</th>
                    <th width="7%">Awarded</th>
                    <th width="10%">Program</th>
                    <th width="30%">Name</th>
                    <th width="12%">School</th>
                    <th width="12%">Course</th>
                    <th width="12%">Academic Award</th>
                </tr>
            </thead>
            <tbody>
            @foreach($scholars as $index=>$scholar)
                <tr class="text-center">
                    <td>{{$index+1}}</td>
                    <td>{{$scholar['awarded_year']}}</td>
                    <td>{{ strtoupper($scholar['program']) }}</td>
                    <td style="text-align: left;">{{ strtoupper($scholar['name']) }}</td>
                    <td>{{$scholar['school']}}</td>
                    <td>{{$scholar['course']}}</td>
                    <td>{{$scholar['award']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

       
    </body>
</html>