@extends('website.principal_candidato')

@section('conteudo')
</br>
<div class="intern-container">
    <div class="animate__animated animate__zoomIn">
        <h3>Inscrição do candidato</h3>
        <hr>

        <div class="mui-panel">
            <div class="alert-info mui-recomendacao" style="padding: 8px;border-radius: 8px;">
                <b>Bem vindo(a), por favor atente-se para as seguintes recomendações:</b>
                <br>
                <li>Por favor, acesse e leia o edital antes de se inscrever.</li>
                <li>Os campos preenchidos de forma equivocada serão mostrados com um alerta.</li>
                <li>Os campos com '<b>*</b>' são de preenchimento <b>OBRIGATÓRIO</b>.</li>
                <li>O campo de nome deve ser preenchido com o nome completo conforme documento.</li>
                <li>Os arquivos anexados podem ser do tipo <b>PDF, JPEG (imagem)</b> ou <b>DOCX (Word)</b>, e devem ter tamanho máximo de <b>5MB</b>.</li>
            </div>
        </div>
        </br>

        @if ($errors->any())
        </br>
        <div class="alert alert-danger withtimeout">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif

        <form action="{{route('site.adiciona')}}" class="row g-3 needs-validation" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

            <h5>Dados pessoais</h5>
            <hr>
            <div class="form-row">
                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <label for="cpf" class="form-label">CPF<span class="obrigatorio">*</span></label>
                    <input name="cpf" class="form-control cpf" value="{{ old('cpf') }}" maxlength="11" placeholder="Somente números" required />
                </div>
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="name" class="form-label">Nome<span class="obrigatorio">*</span></label>
                <input name="name" id="name" class="form-control" value="{{ old('name') }}" maxlength="255" placeholder="Nome completo sem abreviações" required />
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="sex" class="form-label">Sexo<span class="obrigatorio">*</span></label>
                <select name="sex" class="form-select" id="sex" required>
                    <option selected disabled value="">Selecione...</option>
                    <option id="1" value="Masculino">Masculino</option>
                    <option id="2" value="Feminino">Feminino</option>
                    <option id="3" value="Não especificado">Não especificado</option>
                </select>
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="birth_date" class="form-label">Data de nascimento<span class="obrigatorio">*</span></label>
                <input type="date" min="1961-12-12" max="2004-09-21" name="birth_date" id="birth_date" class="form-control" value="{{ old('birth_date') }}" maxlength="8" required />
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="nationality" class="form-label">Nacionalidade<span class="obrigatorio">*</span></label>
                <input name="nationality" id="nationality" class="form-control" value="{{ old('nationality') }}" maxlength="100" placeholder="Exemplo: Brasileira" required />
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="birth_place" class="form-label">Naturalidade<span class="obrigatorio">*</span></label>
                <input name="birth_place" id="birth_place" class="form-control" value="{{ old('birth_place') }}" maxlength="100" placeholder="Exemplo: Manaus-AM" required />
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="marital_status" class="form-label">Estado civil<span class="obrigatorio">*</span></label>
                <select name="marital_status" class="form-select" id="marital_status" required>
                    <option selected disabled value="">Selecione...</option>
                    <option id="1" value="Solteiro">Solteiro</option>
                    <option id="2" value="Casado">Casado</option>
                    <option id="3" value="União estável">União estável</option>
                    <option id="4" value="Divorciado">Divorciado</option>
                    <option id="5" value="Viúvo">Viúvo</option>
                </select>
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="parentage_1" class="form-label">Filiação I<span class="obrigatorio">*</span></label>
                <input name="parentage_1" id="parentage_1" class="form-control" value="{{ old('parentage_1') }}" maxlength="255" placeholder="Nome completo do pai ou da mãe" required />
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="parentage_2" class="form-label">Filiação II (se aplicável)</label>
                <input name="parentage_2" id="parentage_2" class="form-control" value="{{ old('parentage_2') }}" maxlength="255" placeholder="Nome completo do pai ou da mãe" />
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="rg" class="form-label">RG (com dígito)<span class="obrigatorio">*</span></label>
                <input name="rg" class="form-control" value="{{ old('rg') }}" maxlength="15" placeholder="Exemplo: 99999999-9" required />
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="issuing_agency" class="form-label">Órgão emissor<span class="obrigatorio">*</span></label>
                <input name="issuing_agency" id="issuing_agency" class="form-control" value="{{ old('issuing_agency') }}" maxlength="100" placeholder="Exemplo: SSP" />
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="specialization" class="form-label">Especialidade<span class="obrigatorio">*</span></label>
                <select name="specialization" class="form-select" id="specialization" required>
                    <option selected disabled value="">Selecione...</option>
                    <option id="1" value="Pediatria">Pediatria</option>
                    <option id="2" value="Endocrinologia pediátrica">Endocrinologia pediátrica</option>
                    <option id="3" value="Gastroenterologia pediátrica">Gastroenterologia pediátrica</option>
                    <option id="4" value="Neurologia pediátrica">Neurologia pediátrica</option>
                    <option id="5" value="Nutrologia pediátrica">Nutrologia pediátrica</option>
                    <option id="6" value="Ortopedia pediátrica">Ortopedia pediátrica</option>
                    <option id="7" value="Pneumologia pediátrica">Pneumologia pediátrica</option>
                    <option id="8" value="Psiquiatria infantil e adolescente">Psiquiatria infantil e adolescente</option>
                </select>
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="crm" class="form-label">CRM/UF<span class="obrigatorio">*</span></label>
                <input name="crm" id="crm" class="form-control" value="{{ old('crm') }}" maxlength="100" placeholder="Exemplo: 00000/AM" required />
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label for="pcd" class="form-label">Candidato PCD?<span class="obrigatorio">*</span></label>
                <select name="pcd" class="form-select" id="pcd" onchange="pcdCampos(this.value)" required>
                    <option selected disabled value="">Selecione...</option>
                    <option id="1" value="Sim">Sim</option>
                    <option id="2" value="Não">Não</option>
                </select>
            </div>

            <div id="input_deficiency" class="form-group col-sm-6 col-md-6 col-lg-6 animate__animated animate__backInRight">
                <label for="deficiency" class="form-label">Tipo de deficiência<span class="obrigatorio">*</span></label>
                <input name="deficiency" id="deficiency" class="form-control" value="{{ old('deficiency') }}" maxlength="100" placeholder="Exemplo: Deficiência auditiva" required />
            </div>

            <div id="input_cid" class="form-group col-sm-6 col-md-6 col-lg-6 animate__animated animate__backInRight">
                <label for="cid" class="form-label">Classificação Internacional de Doenças<span class="obrigatorio">*</span></label>
                <input name="cid" id="cid" class="form-control" value="{{ old('cid') }}" maxlength="100" placeholder="Exemplo: A00-B99" required />
            </div>

            <h5>Anexo de documentos</h5>
            <hr>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label class="form-label">Documento de identidade (RG, CNH ou CTPS, desde que com foto)<span class="obrigatorio">*</span></label>
                <input name="doc_id" id="doc_id" class="form-control" type="file" value="{{ old('doc_id') }}" accept=".doc, .docx, .pdf, image/jpeg" required>
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label class="form-label">Cadastro de Pessoas Físicas – CPF<span class="obrigatorio">*</span></label>
                <input name="doc_cpf" id="doc_cpf" class="form-control" type="file" value="{{ old('doc_cpf') }}" accept=".doc, .docx, .pdf, image/jpeg" required>
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label class="form-label">Curriculum Vitae<span class="obrigatorio">*</span></label>
                <input name="doc_cv" id="doc_cv" class="form-control" type="file" value="{{ old('doc_cv') }}" accept=".doc, .docx, .pdf, image/jpeg" required>
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label class="form-label">Cópia do Diploma do Curso de Medicina<span class="obrigatorio">*</span></label>
                <input name="doc_medicine" id="doc_medicine" class="form-control" type="file" value="{{ old('doc_medicine') }}" accept=".doc, .docx, .pdf, image/jpeg" required>
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label class="form-label">Cópia do Diploma de Residência Médica ou Especialização<span class="obrigatorio">*</span></label>
                <input name="doc_re_esp" id="doc_re_esp" class="form-control" type="file" value="{{ old('doc_re_esp') }}" accept=".doc, .docx, .pdf, image/jpeg" required>
            </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                <label class="form-label">Cópia do Documento de Inscrição no Conselho Regional de Medicina<span class="obrigatorio">*</span></label>
                <input name="doc_crm" id="doc_crm" class="form-control" type="file" value="{{ old('doc_crm') }}" accept=".doc, .docx, .pdf, image/jpeg" required>
            </div>

            <div id="input_doc_deficiencia" class="form-group col-sm-6 col-md-6 col-lg-6 animate__animated animate__backInRight">
                <label class="form-label">Cópia do Laudo Médico (em caso de PCD)<span class="obrigatorio">*</span></label>
                <input name="doc_deficiency" id="doc_deficiency" class="form-control" value="{{ old('doc_deficiency') }}" type="file" accept=".doc, .docx, .pdf, image/jpeg" required>
            </div>

            <h5>Informações de contato</h5>
            <hr>

            <div class="form-row">
                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <label class="form-label">Telefone (DDD + número)<span class="obrigatorio">*</span></label>
                    <input name="phone" id="phone" class="form-control phone" value="{{ old('phone') }}" tabindex="18" maxlength="50" minlength="9" placeholder="(99) 99999-9999" required />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <label class="form-label">E-mail<span class="obrigatorio">*</span></label>
                    <input type="email" name="email" class="form-control" value="{{old('email')}}" maxlength="100" placeholder="example@email.com" required />
                </div>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input name="form_check" class="form-check-input" type="checkbox" id="" required>Declaro que conferi as informações e que autorizo o uso dos meus dados no processo de inscrição.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" id="btn-submit" btn-block>Inscrever-se</button>
                <a href="{{route('site.home_candidato')}}" class="btn btn-secondary" role="button" data-bs-toggle="button" aria-pressed="true">Voltar</a>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".birth_date").mask("99/99/9999");
        $(".cpf").mask("999.999.999-99");
        $(".phone").mask("(99) 99999-9999");
        $(".cep").mask("99999-999");
        $(".meses").mask("99999");
        $(".rg").mask("#");
    })
</script>

<script type="text/javascript">
    function forceInputUppercase(e) {
        var start = e.target.selectionStart;
        var end = e.target.selectionEnd;
        e.target.value = e.target.value.toUpperCase();
        e.target.setSelectionRange(start, end);
    }
    document.getElementById("name").addEventListener("keyup", forceInputUppercase, false);
    document.getElementById("nationality").addEventListener("keyup", forceInputUppercase, false);
    document.getElementById("birth_place").addEventListener("keyup", forceInputUppercase, false);
    document.getElementById("parentage_1").addEventListener("keyup", forceInputUppercase, false);
    document.getElementById("parentage_2").addEventListener("keyup", forceInputUppercase, false);
    document.getElementById("issuing_agency").addEventListener("keyup", forceInputUppercase, false);
    document.getElementById("deficiency").addEventListener("keyup", forceInputUppercase, false);
    document.getElementById("cid").addEventListener("keyup", forceInputUppercase, false);
    document.getElementById("crm").addEventListener("keyup", forceInputUppercase, false);
</script>

<script>
    var $pcd = $('#pcd'),
        $deficiency = $('#deficiency');
    $cid = $('#cid');
    $doc_deficiency = $('#doc_deficiency');

    $pcd.change(function() {
        if ($pcd.val() == 'Sim') {
            $deficiency.removeAttr('disabled');
            $deficiency.removeAttr('hidden');

            $cid.removeAttr('disabled');
            $cid.removeAttr('hidden');

            $doc_deficiency.removeAttr('disabled');
            $doc_deficiency.removeAttr('hidden');
            show_div();
        } else {
            $deficiency.attr('disabled', 'disabled').val('');
            $deficiency.attr('hidden', 'hidden').val('');

            $cid.attr('disabled', 'disabled').val('');
            $cid.attr('hidden', 'hidden').val('');

            $doc_deficiency.attr('disabled', 'disabled').val('');
            $doc_deficiency.attr('hidden', 'hidden').val('');

            hide_div();
        }
    }).trigger('change');

    function hide_div() {
        $("#input_deficiency").hide();
        $("#input_doc_deficiencia").hide();
        $('#input_cid').hide();
    }

    function show_div() {
        $("#input_deficiency").show();
        $("#input_doc_deficiencia").show();
        $('#input_cid').show();
    }
</script>
@endsection