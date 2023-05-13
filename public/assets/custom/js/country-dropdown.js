const [pickupCountriesSelect, pickupCitiesSelect, dropoffCountriesSelect, dropoffCitiesSelect] = document.querySelectorAll(".countries-select, .cities-select");

let countriesData = null;

// Populate the countries dropdowns with options
fetch('https://countriesnow.space/api/v0.1/countries')
  .then(response => response.json())
  .then(data => {
    countriesData = data.data;

    countriesData.forEach(country => {
      const option = document.createElement("option");
      option.value = country.country;
      option.textContent = country.country;
      pickupCountriesSelect.appendChild(option);

      const dropoffOption = option.cloneNode(true);
      dropoffCountriesSelect.appendChild(dropoffOption);
    });

    // Set default value to Philippines for both pickup and dropoff countries
    const philippinesOption = pickupCountriesSelect.querySelector('option[value="Philippines"]');
    philippinesOption.selected = true;
    dropoffCountriesSelect.querySelector('option[value="Philippines"]').selected = true;

    // Populate the cities dropdowns with options for the Philippines
    const philippinesCities = countriesData.find(country => country.country === "Philippines").cities;

    philippinesCities.forEach(city => {
      const option = document.createElement("option");
      option.value = city;
      option.textContent = city;
      pickupCitiesSelect.appendChild(option);

      const dropoffOption = option.cloneNode(true);
      dropoffCitiesSelect.appendChild(dropoffOption);
    });

    // Update the cities dropdown options when a different country is selected for both pickup and dropoff
    const updateCitiesDropdown = (countriesSelect, citiesSelect) => {
      const selectedCountry = countriesSelect.value;
      const selectedCountryData = countriesData.find(country => country.country === selectedCountry);
      const selectedCountryCities = selectedCountryData.cities;

      // Remove existing options from the cities dropdown
      citiesSelect.innerHTML = "";

      // Populate the cities dropdown with options for the selected country
      selectedCountryCities.forEach(city => {
        const option = document.createElement("option");
        option.value = city;
        option.textContent = city;
        citiesSelect.appendChild(option);
      });
    };

    pickupCountriesSelect.addEventListener("change", event => {
      updateCitiesDropdown(pickupCountriesSelect, pickupCitiesSelect);
    });

    dropoffCountriesSelect.addEventListener("change", event => {
      updateCitiesDropdown(dropoffCountriesSelect, dropoffCitiesSelect);
    });
  })
  .catch(error => console.error(error));
