function workHandler() {
   return {
      fields: [
      {
         year: '',
         month: '',
         background: '',
      },
      {
         year: '',
         month: '',
         background: '',
      },
      ],
      addNewField() {
         if(this.fields.length < 9){
            this.fields.push({
               year: '',
               month: '',
               background: '',
            });
         }
      },
      removeField(index) {
         this.fields.splice(index, 1);
      },
      removeAllField() {
         this.fields.splice(0);
      }
   }
}

function educationHandler() {
   return {
      fields: [
      {
         year: '',
         month: '',
         background: '',
      },
      {
         year: '',
         month: '',
         background: '',
      },
      ],
      addNewField() {
         if(this.fields.length < 9){
            this.fields.push({
               year: '',
               month: '',
               background: '',
            });
         }
      },
      removeField(index) {
         this.fields.splice(index, 1);
      },
      removeAllField() {
         this.fields.splice(0);
      }
   }
}

function licenceHandler() {
   return {
      fields: [
      ],
      addNewField() {
         if(this.fields.length < 9){
            this.fields.push({
               year: '',
               month: '',
               background: '',
            });
         }
      },
      removeField(index) {
         this.fields.splice(index, 1);
      },
      removeAllField() {
         this.fields.splice(0);
      }
   }
}