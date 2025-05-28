document.addEventListener("DOMContentLoaded", function () {
  // Sidebar toggle
  const toggleSidebarBtn = document.querySelector(".toggle-sidebar-btn");
  const toggleSidebar = document.querySelector(".toggle-sidebar");
  const sidebar = document.querySelector(".sidebar");
  const main = document.querySelector(".main");

  if (toggleSidebarBtn && sidebar) {
    toggleSidebarBtn.addEventListener("click", function () {
      sidebar.classList.toggle("collapsed");
      main.classList.toggle("collapsed");
    });
  }

  if (toggleSidebar && sidebar) {
    toggleSidebar.addEventListener("click", function () {
      sidebar.classList.toggle("collapsed");
      main.classList.toggle("collapsed");
    });
  }

  // Mobile sidebar toggle
  const mobileSidebarToggle = document.querySelector(".navbar-toggler");
  if (mobileSidebarToggle) {
    mobileSidebarToggle.addEventListener("click", function () {
      sidebar.classList.toggle("show");
    });
  }

  const themeSelector = document.querySelector(".theme-selector");
  if (!themeSelector) return;

  const toggleBtn = themeSelector.querySelector(".theme-toggle-btn");
  console.log(toggleBtn);
  if (toggleBtn) {
    toggleBtn.addEventListener("click", () => {
      console.log("Toggle button clicked!");
      themeSelector.classList.toggle("expanded");
    });
  }
  if (!toggleBtn) {
    console.log("Toggle button not found!");
    return;
  }

  const themeOptions = themeSelector.querySelectorAll(".theme-option");
  const themeLink = document.getElementById("theme-style");

  themeOptions.forEach((option) => {
    option.addEventListener("click", () => {
      const selectedTheme = option.getAttribute("data-theme");

      // 1. Update data-theme attribute on <html>
      document.documentElement.setAttribute("data-theme", selectedTheme);

      // 2. Change the href of the theme stylesheet link
      if (themeLink) {
        themeLink.href = `assets/css/themes/${selectedTheme}.css`;
      }

      // 3. Update the cookie to persist the theme
      // Set cookie for 30 days
      document.cookie = `theme=${selectedTheme}; path=/; max-age=${
        60 * 60 * 24 * 30
      }`;

      // 4. Close the theme selector UI
      themeSelector.classList.remove("expanded");
    });
  });

  // Responsive table
  const tables = document.querySelectorAll("table");
  tables.forEach((table) => {
    const wrapper = document.createElement("div");
    wrapper.className = "table-responsive";
    table.parentNode.insertBefore(wrapper, table);
    wrapper.appendChild(table);
  });
});
