<div id="modal_kursi" class="modal modal fade modal-xl" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-xl">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cari Jadwal</h4>
            </div>
            <div class="modal-body modal-xl">
                <table width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:center;width:3px;">No</th>
                            <th>Kursi</th>
                            <th>Keterangan</th>
                            <th style="width:100px;text-align:center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($notin_kursi_bayangan as $a) :
                            $jumlah = $this->db->from('tb_tiket_temp')->where(['tanggal' => $tanggal, 'id_jadwal' => $id_jadwal, 'id_bus' => $id_bus, 'id_kursi' => $a['id_kursi']])->count_all_results();
                            $no++; ?>
                            <tr>
                                <td style="text-align:center;"><?= $no; ?></td>
                                <td><?= $a['kursi']; ?></td>
                                <td><?= $jumlah > 0 ? '<span style="color: red">Sudah Diambil</span>' : 'Belum Diambil' ?></td>
                                <td>
                                    <a href="javascript:void(0)" onclick="pilih('<?= $a['id_kursi']; ?>')" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-ok-sign"></i> PILIH</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>