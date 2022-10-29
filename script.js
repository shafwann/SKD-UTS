const url = "https://api.dictionaryapi.dev/api/v2/entries/en/";
const result = document.getElementById("result");
const sound = document.getElementById("sound");
const btn = document.getElementById("search-btn");
const selectAlgorithm = document.getElementsByClassName("algoritma");

selectAlgorithm[0].addEventListener("change", (e) => {
  const valueAlgorithm = document.getElementsByClassName("algoritma")[0].value;

  selectAlgorithm[1].value = valueAlgorithm;
  selectAlgorithm[2].value = valueAlgorithm;
});

const swapForm = () => {
  let isRowReverse =
    document.getElementsByClassName("container-full")[0].style.flexDirection;

  if (isRowReverse === "row-reverse") {
    document.getElementsByClassName("container-full")[0].style.flexDirection =
      "row";
    isRowReverse = "row";
  } else {
    document.getElementsByClassName("container-full")[0].style.flexDirection =
      "row-reverse";
    isRowReverse = "row-reverse";
  }
};
