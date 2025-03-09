/**
 * Intialisation des Tooltips
 */
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

/**
 * Intialisation de CodeMirror
 */
function initCodeMirror(classes, modes)
{
  //DEBUG// console.log(classes);
  if (classes.length > 0) {            
      for (let id of classes) {
          let cdmr = CodeMirror.fromTextArea(id, {
          mode: modes,
          lineNumbers: true,
          matchBrackets: true,
          theme: "material",
          lineWiseCopyCut: true,
          styleActiveLine: true,
          readOnly : true,
          extraKeys: {
              "F11": function(cm) {
                cm.setOption("fullScreen", !cm.getOption("fullScreen"));
              },
              "Esc": function(cm) {
                if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
              }
            },
          undoDepth: 200            
        });
        cdmr.setSize("100%", "100%") // Width, Height of editor 
        //console.log("id : " + id + " not found");
        //console.log("mode : " + modes + " not found");
      }

  } else {
      //DEBUG//       
  }
}


// Initialisation de CodeMirror
initCodeMirror(document.getElementsByClassName("code-php"), "javascript");
initCodeMirror(document.getElementsByClassName("code-js"), "javascript");
/** *************************************************************************** */

// Fonction pour copier le texte des textarea dans le presse-papiers
function copyToClipboard(event) {
  let targetId = event.target.getAttribute('data-target');
  let textToCopy = document.getElementById(targetId).value;
  navigator.clipboard.writeText(textToCopy).then(
    () => {
      console.log('Texte copié dans le presse-papiers');
    }
  ).catch(err => {
    console.error('Erreur lors de la copie dans le presse-papiers : ', err);
  });
}

// Ajoutez l'événement de clic à tous les boutons de copie
document.querySelectorAll('button[data-target]').forEach(button => {
  button.addEventListener('click', copyToClipboard);
});

/** *************************************************************************** */

document.addEventListener('keydown', function(event) {
  // Vérifiez si la combinaison de touches Ctrl + Shift + S est pressée
  if (event.ctrlKey && event.shiftKey && event.key === 'S') {
    // Sélectionnez le lien avec la classe "hidden-link"
    let hiddenLink = document.querySelector('.hidden-link');
    if (hiddenLink) {
      // Changez le style pour afficher le lien
      hiddenLink.style.display = 'block';
    }
  }
});
/** *************************************************************************** */

/**
 * Initialisation et implémentation de la fonction "Scroll to top button"
 */
function scrollToTop() {
  window.scrollTo({
      top: 0,
      behavior: 'smooth'
  });
}

window.onscroll = function() {
  var scrollToTopBtn = document.getElementById("scrollToTopBtn");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollToTopBtn.style.display = "block";
  } else {
      scrollToTopBtn.style.display = "none";
  }
};

/** *************************************************************************** */

/**
 * Classe pour créer des balises personnalisées dédiée à un usage.
 */

class NewElement extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: 'open' });
    const wrapper = document.createElement('span');
    wrapper.innerHTML = this.innerHTML;
    this.shadowRoot.appendChild(wrapper);
  }
}

// Pour les termes SQL
customElements.define('sq-l', NewElement);
// Pour les termes en gras (bold)
customElements.define('st-r', NewElement);

/** *************************************************************************** */
