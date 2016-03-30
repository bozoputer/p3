<table class="responsive">
       <tbody>
       @foreach($rockstars as $rockstar)
         <tr>
           <td>{!! $rockstar->artistName !!}</td>
           <td>{!! $rockstar->birthName !!}</td>
           <td>{!! $rockstar->birthPlace !!}</td>
           <td>{!! $rockstar->birthDate !!}</td>
           <td>{!! $rockstar->bandName !!}</td>
           <td>{!! $rockstar->profilePic !!}</td>
         </tr>
       @endforeach
       </tbody>
   </table>
