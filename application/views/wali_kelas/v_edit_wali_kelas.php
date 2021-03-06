<form method="post" action="<?php echo base_url();?>wali_kelas/ubah">
    <div class="panel panel-default">
        <div class="panel-heading">Tambah Data Wali Kelas</div>
        <div class="panel-body">
            <label>Kode Wali Kelas:</label>
            <input type="text" class="form-control" name="kd_wali" value="<?php echo $kd_wali;?>" readonly required>
            <label>Nama Guru</label>
            <select name="kd_guru" class="form-control">
                <?php
                    foreach($guru->result() as $row)
                    {
                        if($kd_guru == $row->kode_guru)
                        {
                            $selected = "selected";
                        }
                        else
                        {
                            $selected = "";
                        }
                ?>
                        <option value="<?php echo $row->kode_guru;?>" <?php echo $selected;?>><?php echo $row->ket_guru;?></option>
                <?php
                    }
                ?>
            </select>
            <label>Kelas</label>
            <select name="kd_kelas" class="form-control">
                <?php
                    foreach($kelas->result() as $db)
                    {
                        if($kd_kls == $db->kode_kelas)
                        {
                            $selected = "selected";
                        }
                        else
                        {
                            $selected = "";
                        }
                ?>
                        <option value="<?php echo $db->kode_kelas;?>" <?php echo $selected;?>><?php echo $db->ket_kelas;?></option>
                <?php
                    }
                ?>
            </select>
            <label>Tahun Ajaran:</label>
            <input type="text" class="form-control" name="thn_ajaran" value="<?php echo $thn_ajaran;?>" readonly required>
            <br/>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url();?>wali_kelas"  class="btn btn-danger">
                Batal
            </a>
        </div>
    </div>
</form>
