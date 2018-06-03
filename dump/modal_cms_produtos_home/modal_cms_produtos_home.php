<form name="frmCadastroProduto" method="POST" action="">
        <div class="container_input align_right float_left margem_l_5">
          <div class="input ">
            <select class="input_select" name="slcModelo">
              <?php
              $sql = "SELECT * FROM tbl_modelo_produto";
                $select = mysql_query($sql);
                while ($rsPH = mysql_fetch_array($select))
                {

              ?>
              <option value="">SELECIONE UM MODELO</option>
              <option value="<?php echo($rsPH['id_modelo_produto']) ?>"><?php echo($rsPH['modelo']) ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="input ">
            <select class="input_select" name="slcCor">
              <?php
              $sql = "SELECT * FROM tbl_cor";
                $select = mysql_query($sql);
                while ($rsPH = mysql_fetch_array($select))
                {

              ?>
              <option value="">SELECIONE UMA COR</option>
              <option value="<?php echo($rsPH['id_cor']) ?>"><?php echo($rsPH['cor']) ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="input ">
            <select class="input_select" name="slcCategoria">
              <?php
              $sql = "SELECT * FROM tbl_categoria_produto";
                $select = mysql_query($sql);
                while ($rsPH = mysql_fetch_array($select))
                {

              ?>
              <option value="">SELECIONE UMA CATEGORIA</option>
              <option value="<?php echo($rsPH['id_categoria_produto']) ?>"><?php echo($rsPH['categoria']) ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="input ">
            <input class="input_text_111" type="text" name="txt_nome" placeholder="Nome do Produto">
          </div>
          <div class="input ">
            <input class="input_text_111" type="text" name="txt_preco" placeholder="Preço do produto">
          </div>
          <div class="input ">
            <input class="input_text_111" type="text" name="txt_conteudo" placeholder="Conteudo Contido na embalagem">
          </div>
          <div class="input ">
            <select class="input_select" name="slcGarantia">
              <option value="">SELECIONE UMA GARANTIA</option>
              <option value="1 Mes">1 Meses</option>
              <option value="3 Meses">3 Meses</option>
              <option value="5 Meses">5 Meses</option>
              <option value="6 Meses">6 Meses</option>
              <option value="12 Meses">12 Meses</option>
            </select>
          </div>
          <div class="input">
            <input class="input_text_111" type="text" name="txt_desc" placeholder="Descrição do produto">
          </div>
          <div class="input">
            <input class="input_text_111" type="text" name="txt_obs" placeholder="Observações">
          </div>
          <div class="input">
            <div class="Container_btn">
                <input class="input_btn titulo" type="submit" name="btnSalvar" value="Salvar">
            </div>
          </div>
        </div>
      </form>