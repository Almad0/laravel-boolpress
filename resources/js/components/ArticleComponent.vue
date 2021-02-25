<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article Component</div>

                    <div class="card-body">
                        Prova component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
          axios.get('api/articles').then(response => {
            // console.log(response.data.title);
            this.title = response.data.title;
          }).catch(error =>{
            console.log(error);
          })
        }
    }
</script>
