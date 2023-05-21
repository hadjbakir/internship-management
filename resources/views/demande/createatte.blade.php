{{-- @extends('demande.layout')
@section('content')

<div class="container">
    <h1 class="text-center">Title</h1>
    <p class="text-center text-muted"></p>
    <div class="row">
      <div class="col">
        <h1 class="text-center mt-5">ATTESTATION DE STAGE 1</h1>
      </div>
      <p>Je, soussigné(e) <span>   </span> responsable de stage  de <span> </span>
        atteste que l'étudiant(e) <span> </span>      né(e) le <span> </span>  à  <span> </span>
        inscrit(e) à l’ECOLE NATIONALE POLYTECHNIQUE DE CONSTANTINE,
        a effectué un stage de formation dans la filière / spécialité {{$demande->id}}………………………………. /……….
        à…………………………………… , ………………………
        Durant la période du ………………  au ………………
        </p>
    </div>
  </div>




@endsection --}}
@extends('demande.layout')
@section('content')
<style>
    .attestation-container {
        border: 10px solid #000;
        padding: 10px;
        width: 700px;
        length: 900px;
    }
    @page {
        size: A4;
        margin: 0;
    }

    body {
        margin: 0;
        padding: 1.5cm;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100vh;
    }

    .attestation {
        border: 10px solid black;
        padding: 1.5cm;
    }
    .footer {
        display: flex;
        justify-content: flex-end;
        margin-top: 2%;
        padding-right: 1.5cm;

    }
    .signature {
        display: flex;
        margin-bottom: 5cm;
         /* Add spacing below the paragraphs */
    }
</style>
<div class="attestation">
    <p class="text-center text-muted" style="font-family: 'Book Antiqua', serif; font-size: 24px;">République Algérienne Démocratique et Populaire</p>
    <div class="row">
      <div class="col">
        <h1 class="text-center mt-5" style="font-family: 'Britannic Bold', sans-serif; font-size: 64px; font-weight: bold;">ATTESTATION DE STAGE</h1>
    </div>
      <p style="font-family: 'Book Antiqua', serif; font-size: 24px;line-height: 2.5;">Je, soussigné(e) <span>   </span> responsable de stage  de <span> </span>
        atteste que l'étudiant(e) <span> </span>      né(e) le <span> </span>  à  <span> </span>
        inscrit(e) à l’ECOLE NATIONALE POLYTECHNIQUE DE CONSTANTINE,
        a effectué un stage de formation dans la filière / spécialité ………………………………. /……….
        à…………………………………… , ………………………
        Durant la période du ………………  au ………………
        </p>
    </div>

  <div class="footer" style="font-family: 'Book Antiqua', serif; font-size: 24px;line-height: 2.5;">
    <p style=" font-weight: bold; text-align: right;">Fait à ………………. . le …………………</p>
</div>
<div class="signature">
    <p style="  font-weight: bold; margin-right: 2cm; font-family: 'Book Antiqua', serif; font-size: 24px;line-height: 2.5;">Le Représentant de l'Ecole Nationale Polytechnique de Constantine</p>
    <p style="  font-weight: bold;    font-family: 'Book Antiqua', serif; font-size: 24px;line-height: 2.5;">Le Responsable de l'établissement ou de l'administration d'accueil</p>
</div>
<hr style="border: none; border-top: 1px solid black; margin-top: 10px; margin-bottom: 10px;">
<p style=" font-weight: bold; text-align: center;">     Cette attestation est délivrée pour servir et faire valoir ce que de droit</p>

</div>

<a href="{{-- {{ route('export.pdf') }} --}}" class="btn btn-primary">Export as PDF</a>


@endsection
