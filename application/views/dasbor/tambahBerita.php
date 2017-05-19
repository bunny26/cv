 
 <body data-spy="scroll" data-target="navbar navbar-inverse">
 	<?php echo form_open('berita/addBerita'); ?>
 </pre>
 <h3>Tambah Berita</h3>
 <table>
 	<tbody>
 		<tr>
 			<td>Judul Berita</td>
 			<td><?php               
 				$input = array('name' => 'judul', 'size' => '50');
 				echo form_input($input);
 				?></td>
 			</tr>
 			<tr>
 				<td>Isi Berita</td>
 				<td><?php               
 					$textarea = array('name' => 'isi', 'cols' => '60', 'row' => '7');
 					echo form_textarea($textarea);
 					?>
 						
 				</td>
 				</tr>
 				<tr>
 					<td colspan="2"></td>
 				</tr>
 			</tbody>
 		</table>
 		<pre>
 			<?php echo form_close(); ?>

